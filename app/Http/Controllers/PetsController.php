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

    public function search(Request $request)
    {
        $petName = $request->input("name");
        
        $pets = Pet::where('name', 'like', '%' . $petName . '%')->orderBy('name', 'asc')->get();

        return view("pets/search", compact('pets'));
    }

    public function show($id)
    {
        $pet = Pet::find($id);

        return view("pets/show", compact("pet"));
    }

    public function create($id)
    {

        $owner = Owner::find($id);
        $pet = new Pet();

        return view("pets/create", compact("pet", "owner"));
    }

    public function store(Request $request, $id)
    {
        //validation
        $this->validate($request, [
            "name" => "required",
            "breed" => "required",
            "specie_id" => "required"
        ]);
        
        $pet = new Pet();

        $pet->name = $request->input("name");
        $pet->breed = $request->input("breed");
        $pet->age = $request->input("age");
        $pet->weight = $request->input("weight");
        $pet->photo = $request->input("photo");
        $pet->specie_id = $request->input("specie_id");
        $pet->owner_id = $id;
        $pet->save();

        session()->flash("success_message", "Pet was saved.");

        return redirect(action("PetsController@index"));
    }

    public function edit ($id)
    {
        $pet = Pet::findOrFail($id);
        $action = "update";

        return view("pets.create", compact("pet", "action"));
    }

    public function update (Request $request, $id)
    {
        //validation
        $this->validate($request, [
            "name" => "required",
            "breed" => "required",
            "specie_id" => "required"
        ]);

        $pet = Pet::findOrFail($id);

        $pet->name = $request->input("name");
        $pet->breed = $request->input("breed");
        $pet->age = $request->input("age");
        $pet->weight = $request->input("weight");
        $pet->photo = $request->input("photo");
        $pet->specie_id = $request->input("specie_id");
        $pet->owner_id = $id;
        $pet->save();

        session()->flash("success_message", "Pet was saved.");

        return redirect(action("PetsController@index"));
    }
}