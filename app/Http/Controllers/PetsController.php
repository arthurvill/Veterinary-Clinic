<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Pet;

class PetsController extends Controller
{
    public function index()
    {
        $owners = Owner::orderBy("first_name")->get();

        return view("clinic/index", compact("owners"));
    }

    public function show($id)
    {
        $pet = Pet::find($id);

        return view("pets/show", compact("pet"));
    }
}