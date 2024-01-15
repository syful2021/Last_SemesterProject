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
        $save->save();

        return redirect()->back()->with('success' , 'Contact Successfully saved!');

    }

}
