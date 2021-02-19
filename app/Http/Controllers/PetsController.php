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

    public function create($id)
    {
        $pet = new Pet();

        return view("pets/create", compact("pet", "id"));
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            "name" => "required",
            "breed" => "required"
        ]);
        
        $pet = new Pet();

        $pet->first_name = $request->input("first_name");
        $pet->surname = $request->input("surname");

        $pet->save();

        session()->flash("success_message", "Owner was saved.");

        return redirect(action("PetsController@index"));
    }
}