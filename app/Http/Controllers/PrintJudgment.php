<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateModel;
use App\Models\JudgmentModel;
use App\Models\QuotesModel;
use Illuminate\Support\Facades\Storage;
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
        $item;
        $type = (int)$request->input('type');
        $id = (int)$request->input('id');
        $data['template'] = TemplateModel::find((int)$request->input('template'));
        $content = Storage::disk('local')->get('documents/'.$data['template']->url);
    
        $templateProcessor = new TemplateProcessor(storage_path('app/documents/'.$data['template']->url));
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
            $item = JudgmentModel::find((int)$id);
            $templateProcessor->setValue('PARTE1', 'Sohail');
            $templateProcessor->setValue('PARTE2', 'Saleem');
            $templateProcessor->setValue('EXPEDIENTE', 'Sohail');
            $templateProcessor->setValue('MATERIA', 'Saleem');
            $templateProcessor->setValue('NUMJUZ', 'Sohail');
            $templateProcessor->setValue('CITY', 'Saleem');
        }
        
        $file = $templateProcessor->saveAs('Result.docx');
        $filename = 'Result.docx';
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename); // deletes the temporary file
        exit;
        
    }

}
