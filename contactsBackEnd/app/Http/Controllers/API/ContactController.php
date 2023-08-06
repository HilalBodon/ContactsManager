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

    // public function edit($id){
    //     $contact =  Contact::find($id);
    //     return response()->json([
    //         'status' => 200,
    //         'contact' => $contact
    //     ]);
    // }

    // public function update(Request $request, $id){
    //     $contact = Contact::find($id);
    //     if (!$contact) {
    //         return response()->json([
    //             'status' => 404,
    //             'message' => 'Contact not found'
    //         ]);
    //     }

    //     $contact->name = $request->input('name');
    //     $contact->phone = $request->input('phone');
    //     $contact->latitude = $request->input('latitude');
    //     $contact->longitude = $request->input('longitude');
    //     $contact->save();

    //     return response()->json([
    //         'status'=> 200,
    //         'message'=>'Contact updated successfully'
    //     ]);
    // } 
    }

