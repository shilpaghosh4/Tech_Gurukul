<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class catagoryController extends Controller
{
    public function index(){

        return Catagory::all();
    }

}


