<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Organization;
use Illuminate\Support\Facades\DB;
use joshtronic\LoremIpsum;


class HomeController extends Controller
{
    /**
     * Homepage
     *
     */
    public function show()
    {
        $randDogs = Dog::orderBy(DB::raw('RAND()'))->take(4)->get();
        $spotlightOrg = Organization::orderBy(DB::raw('RAND()'))->take(1)->get()[0];
        $spotlightOrg->count = $spotlightOrg->countDogs();
        $spotlightOrg->randomUser = $spotlightOrg->users()->take(1)->get()[0];

        // Let us buff up some of the text to look more legit.
        $lorem = new LoremIpsum();
        $spotlightOrg->description .= ' '. $lorem->sentences(2);

        return view('pages.home', ['dogs' => $randDogs, 'spotlight' => $spotlightOrg]);
    }

    /**
     * About Page
     *
     */
    public function about()
    {
        return view('pages.about');
    }
}