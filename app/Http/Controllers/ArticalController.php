<?php

namespace App\Http\Controllers;

use App\Artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    function getAllArticals(){
        return Artical::all();
    }
//    public function getArticals($id){
//        return Artical::findOrFail($id);
//
//    }
    function getArticals(Artical $artical){
        return $artical;

    }
}

