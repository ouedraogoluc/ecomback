<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function PostContactDetails(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
       # $phone = $request->input('phone');
       # $subject = $request->input('subject');
        $description = $request->input('description');
        date_default_timezone_set("Africa/Ouagadougou");
        $contact_time = date('h:i:sa');
        $contact_date = date("d-m-y");
        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            #'phone'=>$phone,
           # 'subject'=>$subject,
            'description'=>$description,
            'contact_date'=>$contact_date,
            'contact_time'=>$contact_time,
        ]);
        return $result;
    }
}                             

