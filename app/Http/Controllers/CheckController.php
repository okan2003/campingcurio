<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Date;
use App\Models\Areatype;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(){

    }

    public function showAreas(){
            $plaatsen = Area::join('plaatstypen', 'plaatstypen.id', '=', 'plaatsen.plaatstypen_id')
                ->get(['plaatsen.code', 'plaatstypen.type']);

//        $plaatsen = Area::with('areatype')->get();
//        $plaatstypen = Areatype::all();

        return view('check', [
            'plaatsen' => $plaatsen,
//            'plaatstypen' => $plaatstypen,
        ]);
    }

    public function checkDate(){

    }

}
