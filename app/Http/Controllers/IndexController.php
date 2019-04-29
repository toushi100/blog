<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Offer;
use App\excursions;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        //
        $offer = Offer::all();
        $excursion = excursions::all();
        return view('/index')->with('offer',$offer)->with('excursion',$excursion);
    }

}
