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
        return view("owners/create");
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
    }
}