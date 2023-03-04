<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OurWork;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    public function getOurWork(Request $request)
    {

        $searchType =  $request->query('type');
        $ourWork = OurWork::where('type',"LIKE","%$searchType%")->get();
        $extraData = [
            'type'=> $searchType
        ];
        // return $ourWork;
        return view('OurWork', compact('ourWork'),compact('extraData'));

            // ,compact('extraData')
        
    }
}
