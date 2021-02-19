<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class PetsController extends Controller
{
    public function index()
    {
        $owners = Owner::orderBy("first_name")->get();

        return view("clinic/index", compact("owners"));
    }

    public function show()
    {
        
    }
}