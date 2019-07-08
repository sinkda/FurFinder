<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dog;
use App\Organization;

class DogController extends Controller
{
    public function show($id = null)
    {
        // if no $id is provided. 
        if(!$id)
            return view('pages.alldogs');

        // validate $id is a number.
        if(!is_numeric($id))
            return redirect('/');

        $dog = Dog::find($id);

        // TODO: Make a beter handle for this
        if(!$dog)
            return redirect('/');

        $org = $dog->organization()->get()[0];
        $dog->readableBreed = $this->readableBreed($dog->breed);

        return view('pages.dog', ['dog' => $dog, 'org' => $org]);
    }

    private function readableBreed($breed)
    {
        if(!strpos($breed, '-'))
            return ucfirst($breed);

        [$primary, $secondary] = explode('-', $breed);
        return ucfirst($secondary).' '.ucfirst($primary);

    }
}
