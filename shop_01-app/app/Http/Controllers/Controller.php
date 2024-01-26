<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Test;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getForm() {
        return view("forms.form");
    }

    public function formData(Request $request){
        $inputs = $request->all();
        
        $datas = Test::getData($inputs);

        return view('index', compact("datas"));
    }

    public function getIndex(){
        $datas = "Hello!";

        $x = 13; 
        $y = 14;
        
        $sum = Test::getSum($x, $y);

        return view("index", compact("x", "y", "sum", "datas"));
    }


    public function getFormView(){
        

        return view("showForm");
    }

    public function processedData(Request $request){
        $newInputs = $request->all();
        
        $datas = ['item1', 'item2', 'item3' ];

        return view("index", compact("datas"));
    }





    // public function getData($params) {
    //     if($params["firstname"] == "test1"){
    //         return "checked";
    //     }
    //     return "not verified";
    // }
}
