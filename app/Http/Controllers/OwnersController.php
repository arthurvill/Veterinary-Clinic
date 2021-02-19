<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Pet;

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

        return view("owners/create", compact("owner"));
    }

    public function store(Request $request, $id)
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
}