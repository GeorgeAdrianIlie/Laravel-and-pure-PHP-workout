<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public static function getData($params)
    {

        if($params["firstname"] == "test1"){
            return "checked";
        }
        return "not verified";
        
    }

    public static function getSum($x, $y){
        $sum = $x + $y; 

        return $sum;
    }


    public static function checkedData($params){
        if(strlen($params["task"]) >= 4){
            return "Task name have more then 4 char.";
        }else{
            return "Task name have less then 4 char.";
        }

    }

}
