<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{

    public function admin_contact()
    {

        $data['getRecord'] = ContactModel::get();
        return view('admin.contact.list', $data);
    }

    public function contact_post(Request $request)
    {
        if($request->add_to_update == 'Add')
        {
            $save = new ContactModel;
        }else{
            $save = ContactModel::find($request->id);
        }

        $save->title        = trim($request->title);
        $save->description  = trim($request->description);

        $save->address1  = trim($request->address1);
        $save->address2  = trim($request->address2);
        $save->phone1  = trim($request->phone1);
        $save->phone2  = trim($request->phone2);
        $save->email1  = trim($request->email1);
        $save->email2  = trim($request->email2);
        $save->working1  = trim($request->working1);
        $save->working2  = trim($request->working2);
        
        $save->save();

        return redirect()->back()->with('success' , 'Contact Successfully saved!');

    }

}
