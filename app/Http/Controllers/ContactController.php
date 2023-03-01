<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{


    public function index($id = null)
    {
        if ($id == null) {
            $contacts = Contact::orderBy('id', 'DESC')->get();
            return view('contact.index', compact('contacts'));
        } else {
            $contact = Contact::find($id);
            $contact->is_read = 1;
            $contact->save();
            return $this->respondWithSuccess('Contact found', $contact);
        }
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithError("Validation Error", $validator->errors());
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->is_read = 0;
        $contact->save();

        return $this->respondWithSuccess('Message sent successfully');
    }
}
