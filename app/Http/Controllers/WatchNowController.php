<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WatchNowModel;

class WatchNowController extends Controller
{

    public function admin_watch_now()
    {

        $data['getRecord'] = WatchNowModel::all();
        return view('admin.watch_now.list', $data );
    }

    public function watch_now_post(Request $request)
    {
        // dd($request->all());


        if($request->add_to_update == 'Add')
        {
        $insertRecord = new WatchNowModel;

        }else{

        $insertRecord = WatchNowModel::find($request->id)  ;

        }

        $insertRecord->title    = trim($request->title);
        $insertRecord->url      = trim($request->url);

        $insertRecord->save();
        return redirect()->back()->with('success', 'Watch now page successfully saved!');


    }

}
