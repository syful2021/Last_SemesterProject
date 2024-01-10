<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeamModel;
use App\Models\PositionModel;
use Str;


class OurTeamController extends Controller
{

    // our_team_list

    public function our_team_list()
    {
        $data['getRecord'] = OurTeamModel::all();

        return view('admin.our_team.list', $data);
    }

    // our_team_post

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

    //  our_team_position

    public function our_team_position($id, Request $request)
    {

        $data['getId'] =  $id;

        $data['getRecord'] = PositionModel::where('position.our_team_id', '=', $id )->get();
        return view('admin.our_team.our_team_position', $data);
    }

    public function our_team_position_add($id, Request $request)
    {

        $data['getId'] = $id;
        return view('admin.our_team.our_team_position_add', $data);
    }


    public function our_team_position_add_post($id, Request $request)
    {
        // dd($request->all());

        $insertRecord = new PositionModel;
        $insertRecord->our_team_id      = trim($request->our_team_id);
        $insertRecord->name             = trim($request->name);
        $insertRecord->position_name    = trim($request->position_name);

        if(!empty($request->file('image')))
         {

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/our_team/',$filename);
            $insertRecord->image = $filename;
         }
         $insertRecord->save();

         return redirect('admin/our_team/list/'.$request->our_team_id )->with('success', 'Position add successfully save' );

    }
    //  Edit part

    public function our_team_position_edit($id, Request $request)
    {

        $data['getRecord'] = PositionModel::find($id);
        return view('admin.our_team.our_team_position_edit', $data);
    }

    public function our_team_position_edit_update($id, Request $request)
    {
        $insertRecord = PositionModel::find($id);

        $insertRecord->name             = trim($request->name);
        $insertRecord->position_name    = trim($request->position_name);

        if(!empty($request->file('image')))
         {
            if(!empty($insertRecord->image) && file_exists('public/our_team/'.$insertRecord->image))
                {
                    unlink('public/our_team/'.$insertRecord->image);
                }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/our_team/',$filename);
            $insertRecord->image = $filename;
         }
         $insertRecord->save();

         return redirect('admin/our_team/list/'.$insertRecord->our_team_id )->with('success', 'Position Update successfully saved!' );

    }
    // Delete

    public function our_team_position_delete($id)
    {
        $insertRecord = PositionModel::find($id);
        if(!empty($insertRecord->image) && file_exists('public/our_team/'.$insertRecord->image))
        {
            unlink('public/our_team/'.$insertRecord->image);
        }

        $insertRecord->delete();

        return redirect()->back()->with('error', 'position successfully Deleted!');
    }

}

