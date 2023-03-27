<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\Support\Facades\Redirect;



class Pet_Controller extends Controller
{
    public function index()
    {
        $title = "Create Record";
        $url = url('/pet');
        $pet = new Pet();
        $data = compact('url', 'title', 'pet');
        return view('pet')->with($data);
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $pet = new Pet;
        $pet->PetName = $request['PetName'];
        $pet->Quantity = $request['Quantity'];
        $pet->save();
        return redirect('/pet/view');
    }
    public function view()
    {
        $pet = Pet::all();
        $data = compact('pet');
        return view('pet-view')->with($data);
    }

    public function delete($id)
    {
        $pet = Pet::find($id)->delete();
        return Redirect()->back();
    }


    public function edit($id)
    {
        $pet = Pet::find($id);
        $data = compact('pet');
        return view('edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::find($id);
        $pet->PetName = $request->input('PetName');
        $pet->Quantity = $request->input('Quantity');
        $pet->update();
        $pets=new Pet();
        $data=compact('pets');

        return redirect('/pet/view' )->with('status',"Data updated")->with($data);
    }
}
