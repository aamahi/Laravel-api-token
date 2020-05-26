<?php

namespace App\Http\Controllers;

use App\Artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    function getAllAritcals(){
        return Artical::all();
    }
}
