<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutModel;


class AboutController extends Controller
{
    public function admin_about(Request $request)
    {
        return view('admin.about.list');
    }

    public function admin_about_post(Request $request)
    {
        //dd($request->all());

        $insertRecord = new AboutModel;

        $insertRecord->title             = trim($request->title);
        $insertRecord->description       = trim($request->description);
        $insertRecord->title_one         = trim($request->title_one);
        $insertRecord->description_one   = trim($request->description_one);
        $insertRecord->title_two         = trim($request->title_two);
        $insertRecord->description_two   = trim($request->description_two);
        $insertRecord->title_three       = trim($request->title_three);
        $insertRecord->description_three = trim($request->description_three);

        $insertRecord->save();
        return redirect()->back()->with('success', 'About page successfully saved!');

    }
}
