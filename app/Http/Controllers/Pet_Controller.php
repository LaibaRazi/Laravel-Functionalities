<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class Pet_Controller extends Controller
{
    public function index()
    {
        return view('pet');
    }
    public function store(Request $request)
    {
        echo"<pre>";
        print_r($request->all());
        $pet =new Pet;
        $pet ->PetName =$request['PetName'];
        $pet ->Quantity =$request['Quantity'];
        $pet ->save();
        return redirect('/pet/view');
    }
    public function view()
    {
        $pet = Pet::all();
        $data = compact('pet');
        return view('pet-view')->with($data);
    }
}
