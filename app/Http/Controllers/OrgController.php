<?php


namespace App\Http\Controllers;

use App\Organization;
use joshtronic\LoremIpsum;

class OrgController
{
    public function show($id = null)
    {
        // if no $id is provided, view all dogs
        if (!$id)
            return view('pages.allorgs', ['orgs' => Organization::all()]);

        // validate $id is a number.
        if (!is_numeric($id))
            return redirect('/');

        $org = Organization::find($id);

        // TODO: Make a beter handle for this
        if (!$org)
            return redirect('/');

        $dogs = $org->dogs()->get();
        $users = $org->users()->get();

        // Let us buff up some of the text to look more legit.
        $lorem = new LoremIpsum();
        $org->description .= ' ' . $lorem->sentences(3);

        return view('pages.org', ['dogs' => $dogs, 'org' => $org, 'users' => $users]);
    }

}