<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        $contact = new Contact;
        $contact-> name = $request->input('name');
        $contact-> phone = $request->input('phone');
        $contact-> latitude = $request->input('latitude');
        $contact-> longitude = $request->input('longitude');
        $contact->save();

        return response()->json([
            'status'=> 200,
            'message'=>'Contact created successfully'
        ]);
    }  
    
    public function index(){
        $contacts = Contact::all();
        return response()->json([
            'status'=> 200,
            'contacts'=>$contacts
        ]);
    }
}
