<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeamModel;


class OurTeamController extends Controller
{
    public function our_team_list()
    {
        $data['getRecord'] = OurTeamModel::all();

        return view('admin.our_team.list', $data);
    }

    public function our_team_post(Request $request)
    {

            //   dd($request->all());

       if($request->add_to_update == 'Add'){
            $save = new OurTeamModel;

       }else{
             $save = OurTeamModel::find($request->id);

       }

       $save->title         = trim($request->title);
       $save->description   = trim($request->description);

       $save->save();

       return redirect()->back()->with('success', ' Our Team successfully saved!');

    }
}

