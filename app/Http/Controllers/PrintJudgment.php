<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateModel;
use App\Models\JudgmentSubTypeModel;
use App\Models\QuotesModel;
use App\Models\StateModel;
use Illuminate\Support\Facades\Storage;
use DB;
use PhpOffice\PhpWord\TemplateProcessor;


class PrintJudgment extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function generateTemplate(Request $request)
    {
     
   
        // List of name of files inside
        // specified folder
        $files = glob(storage_path('app/documents/outputs').'/*'); 
        
        // Deleting all the files in the list
        foreach($files as $file) {
        
            if(is_file($file)) 
            
                // Delete the given file
                unlink($file); 
        }
        $item;
        $type = (int)$request->input('type');
        $id = (int)$request->input('id');
        $data['template'] = TemplateModel::find((int)$request->input('template'));

        $templateProcessor = new TemplateProcessor(storage_path('app/documents/templates/'.$data['template']->url));
     
        $url = $data['template']->url;
        if($type == "quote"){
            $item = QuotesModel::find((int)$id);
            $templateProcessor->setValue('PARTE1', 'Sohail');
            $templateProcessor->setValue('PARTE2', 'Saleem');
            $templateProcessor->setValue('EXPEDIENTE', 'Sohail');
            $templateProcessor->setValue('MATERIA', 'Saleem');
            $templateProcessor->setValue('NUMJUZ', 'Sohail');
            $templateProcessor->setValue('CITY', 'Saleem');
        }
        else{
            $item =  DB::table('judgment')->where('judgment.id', $id)
            ->leftjoin('judgment_type', 'judgment.judgment_type', '=', 'judgment_type.id')
            ->leftjoin('correspondent', 'judgment.correspondent_id', '=', 'correspondent.id')
            ->leftjoin('states', 'judgment.state', '=', 'states.id')
            ->select('judgment.*', 'judgment_type.name as type_name', 'correspondent.name as correspondent_name', 'states.description as state_name')
            ->limit(1)->get()[0];
          
      
            if(isset($item->state)){
                $itemState = StateModel::find((int)$item->state);
                if($itemState != null && $itemState->data != null){
                    $data = json_decode($itemState->data) ;
                    foreach ($data as $key => $value) {
                        $templateProcessor->setValue($value->name, $value->value);
                    }
                }
                
            }
            
            if(isset($item->judgment_subtype)){
                $itemType= JudgmentSubTypeModel::find((int)$item->judgment_subtype);
                if($itemType != null && $itemType->data != null){
                    $data = json_decode($itemType->data) ;

                    foreach ($data as $key => $value) {
                          var_dump($key);
                        var_dump($value);
                        //$templateProcessor->setValue($key, $value);
                    }
                }
            }
            // string(1) "1" string(8) "redirect" string(14) "corresponsales" string(5) "event" string(1) "7"
               // $vars = get_object_vars((array)$request->input());
             
           //   }
            foreach($request->input() as $key=>$value) {
                
                if($key != 'type' && $key != 'id' && $key != 'template' && $key != 'event' && $key != 'redirect' && $key != '_token')
                {
                    $templateProcessor->setValue($key, $value);
                 
                }
            }
            die();
            $templateProcessor->setValue('PARTE1', $item->applicant1);
            $templateProcessor->setValue('PARTE2', $item->defendant);
            $templateProcessor->setValue('LAWYER', $item->lawyer);
            $templateProcessor->setValue('PARTE2', $item->defendant);
            $templateProcessor->setValue('DOMJUR', $item->address);
            $templateProcessor->setValue('ID', $item->intern_id);
            $templateProcessor->setValue('NOT', $item->correspondent_name);
            $templateProcessor->setValue('CITY', $item->city);
            $templateProcessor->setValue('STATE', $item->state_name);
            $templateProcessor->setValue('EXPEDIENTE', $item->expedient);
            $templateProcessor->setValue('ASUNTO', $item->deal);
            
        }
       
        $replacedUrl = str_replace('docx', 'pdf', $url);
	    $fileStorage = storage_path('app/documents/outputs/'.str_replace('(ID)', $item->intern_id, $replacedUrl));
        $templateProcessor->saveAs($fileStorage);
        $domPdfPath = base_path( 'vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        
        //load generated file
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($fileStorage); 
        //generate the pdf converter class
        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
        //save generated File
        $replacedUrl = str_replace('docx', 'pdf', $url);
        $pdfLocation = storage_path('app/documents/outputs/'.str_replace('(ID)', $item->intern_id, $replacedUrl));
        //return the file from controller
        return response()->download($pdfLocation);
        
    }

}
