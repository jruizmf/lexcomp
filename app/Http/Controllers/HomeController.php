<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorrespondentModel;
use App\Models\QuotesModel;
use App\Models\JudgmentModel;
use App\Models\TemplateModel;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $type = $request->query('tipo');
        $filter = $request->query('filtro');
        $templates = TemplateModel::all();
        if(isset($type) && $type !== null){
            if($type == 1){
                $list = [];
                if(isset($filter) && $filter !== null){
                  
                    $list = CorrespondentModel::where('name','like', '%'.$filter.'%')->get();
                } else{
                    $list = CorrespondentModel::all();
                }
               
                return view("home",compact('type', 'list', 'templates', 'filter'));
            }
            else if($type == 2){
                $list = [];
                if(isset($filter) && $filter !== null){
                    $list = QuotesModel::where('name','like', '%'.$filter.'%')->get();
                } else{
                    $list = QuotesModel::all();
                }
                return view("home",compact('type', 'list', 'templates', 'filter'));
            }
            else if($type == 3){
                $list = [];
                if(isset($filter) && $filter !== null){
                    $list = JudgmentModel::where('name','like', '%'.$filter.'%')->get();
                } else{
                    $list = JudgmentModel::all();
                }
                return view("home",compact('type', 'list', 'templates', 'filter'));
            }
            else {
                $list = CorrespondentModel::all();
                return view("home",compact('type', 'list', 'templates', 'filter'));
            }
           
        } else {
            $type = 1;
            $list = CorrespondentModel::all();
            return view('home', compact('type', 'list', 'templates', 'filter'));
        }
       
    }
}
