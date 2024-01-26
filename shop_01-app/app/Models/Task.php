<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $tasks;

    protected $fillable = ['name','description','amount'];

    public function getAll(){
        $tasks = $this->get();

        return $tasks;
    }
    

}
