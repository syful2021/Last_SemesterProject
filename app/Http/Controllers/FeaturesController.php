<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeaturesModel;
use Str;
use File;


class FeaturesController extends Controller
{
    public function features_list()
    {
        $data['getRecord'] = FeaturesModel::all();

        return view('admin.features.list', $data);
    }

    public function features_post(Request $request)
    {
        // dd($request->all());

        if($request->add_to_update == 'Add'){

            $save = request()->validate([
                'image' => 'required',
            ]);
            
            $save = new FeaturesModel;

        }else{
            $save = FeaturesModel::find($request->id);

        }

        $save->title              = trim($request->title);
        $save->description        = trim($request->description);
        $save->name_one           = trim($request->name_one);
        $save->description_one    = trim($request->description_one);
        $save->name_two           = trim($request->name_two);
        $save->description_two    = trim($request->description_two);
        $save->name_three         = trim($request->name_three);
        $save->description_three  = trim($request->description_three);
        $save->name_four          = trim($request->name_four);
        $save->description_four   = trim($request->description_four);
        $save->name_five          = trim($request->name_five);
        $save->description_five   = trim($request->description_five);
        $save->name_six           = trim($request->name_six);
        $save->description_six    = trim($request->description_six);

        if(!empty($request->file('image')))
         {
            if(!empty($save->image) && file_exists('public/features/'.$save->image))
                {
                    unlink('public/features/'.$save->image);
                }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/features/',$filename);
            $save->image = $filename;
         }

         $save->save();
         return redirect()->back()->with('success', 'Features page successfully saved!');


    }
}
