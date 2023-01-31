<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateModel;
use App\Models\JudgmentModel;
use App\Models\QuotesModel;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;


class Template extends Controller
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
    public function index()
    {
        $list = TemplateModel::all();
        return view('template.index')->with('list', $list);
    }

    public function create()
    {
        return view('template.create');
    }
    public function store(Request $request)
    {
        //var_dump($request->file('file')->storeAs('uploads'));
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlxs,xlx,docx,doc,csv,txt,png,gif,jpg,jpeg|max:2048',
            ]); 
            $fileName = $request->file->getClientOriginalName();
            $filePath = $fileName;
     
        $request->file('file')->storeAs('documents', $fileName );
       
        }
        $item = new TemplateModel();
        $item->name = $request->input('name');
        $item->description  = $request->input('description');
        $item->url  = $filePath ;
        $item->type = $request->input('type');

        $item->save();
        return redirect()->route('plantillas');
    }
    public function generate(Request $request)
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
    public function edit($id)
    {
        $item = TemplateModel::find($id);
        return view('template.edit')->with('item',$item);
    }
    public function update(Request $request)
    {
        $item = TemplateModel::find($id);
        $item->name = $request->input('name');
        $item->deal  = $request->input('description');
        $item->city  = $request->input('url');
        $item->state = $request->input('type');
        $item->save();
        return redirect()->route('template.index');
    }
     // Esta es la primer opcion
     public function destroy($id)
     {
         $pastel = TemplateModel::find($id);
         $pastel->delete();
         return redirect()->route('template.index');
     }
}
