<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Pet;

use function Symfony\Component\String\b;

class OwnersController extends Controller
{
    public function show ($id)
    {
        $owner = Owner::find($id);

        return view("owners/show", compact("owner"));
    }

    public function create()
    {
        $owner = new Owner();
        $action = "create";

        return view("owners/create", compact("owner", "action"));
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            "first_name" => "required",
            "surname" => "required|unique:owners"
        ]);
        
        $owner = new Owner();

        $owner->first_name = $request->input("first_name");
        $owner->surname = $request->input("surname");
        $owner->address = $request->input("address");
        $owner->email = $request->input("email");
        $owner->phone = $request->input("phone");

        $owner->save();

        session()->flash("success_message", "Owner was saved.");

        return redirect(action("PetsController@index"));
    }

    public function edit ($id)
    {
        $owner = Owner::findOrFail($id);
        $action = "update";

        return view("owners.create", compact("owner", "action"));
    }

    public function update (Request $request, $id)
    {
        //validation
        $this->validate($request, [
            "first_name" => "required",
            "surname" => "required"
        ]);

        $owner = Owner::findOrFail($id);

        $owner->first_name = $request->input("first_name");
        $owner->surname = $request->input("surname");
        $owner->address = $request->input("address");
        $owner->email = $request->input("email");
        $owner->phone = $request->input("phone");

        $owner->save();

        session()->flash("success_message", "Owner was saved.");

        return redirect(action("PetsController@index"));
    }

    public function delete ($id)
    {
        $owner = Owner::find($id);

        foreach($owner->pets as $pet)
        {
            $pet->delete();
        }
        $owner->delete();

        return redirect(action("PetsController@index"));
    }

}