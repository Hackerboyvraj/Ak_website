<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactcreate(Request $request)
    {

        $contact = new Contact();

        $contact->Yourname = $request->input('Yourname');
        $contact->It = $request->input('It');
        $contact->spacify = $request->input('spacify');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->need = $request->input('need');
        $contact->work = $request->input('work');
        $contact->begin = $request->input('begin');
        $contact->budget =$request->input('budget');
        $contact->about = $request->input('about');

        $contact->save();

        return response()->json($contact);
    }
}
