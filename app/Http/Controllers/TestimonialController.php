<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestimonialsModel;
use App\Models\TestimonialsDetailsModel;
use Str;

class TestimonialController extends Controller
{

    public function  testimonials_list(Request $request)
    {
        $data['getRecord'] = TestimonialsModel::all();

        return view('admin.testimonials.list', $data);
    }

    public function  testimonials_post(Request $request)
    {
        // dd($request->all());

        if($request->add_to_update == 'Add')
        {
            $save = new TestimonialsModel;

        }else{
            $save = TestimonialsModel::find($request->id);

        }

        $save->title        = trim($request->title);
        $save->description        = trim($request->description);
        $save->save();

        return redirect()->back()->with('success', 'Testimonials successfully saved!');

    }

    public function add_testimonials_list(Request $request)
    {
        $data['getRecord'] = TestimonialsDetailsModel::get();
        return view('admin.testimonials.testimonials_list', $data);
    }

    public function testimonials_add(Request $request)
    {
        // echo 'error';die();

        return view('admin.testimonials.testimonials_add');

    }

    public function testimonials_add_post(Request $request)
    {
        // dd($request->all());


        $save = new TestimonialsDetailsModel;
        $save->name             = trim($request->name);
        $save->position_name    = trim($request->position_name);
        $save->description      = trim($request->description);

        if(!empty($request->file('image')))
        {

           $file = $request->file('image');
           $randomStr = Str::random(30);
           $filename = $randomStr.'.'.$file->getClientOriginalExtension();
           $file->move('public/testimonials/',$filename);
           $save->image = $filename;
        }

        $save->save();
        return redirect('admin/testimonials/list')->with('success', 'Testimonials successfully saved!' );

    }
    // Edit part
    public function testimonials_edit($id, Request $request)
    {
        $data['getRecord'] = TestimonialsDetailsModel::find($id);
        return view('admin.testimonials.testimonials_edit', $data);
    }
    // Updated part
    public function testimonials_edit_update($id, Request $request)
    {

        $save = TestimonialsDetailsModel::find($id);
        $save->name             = trim($request->name);
        $save->position_name    = trim($request->position_name);
        $save->description      = trim($request->description);

        if(!empty($request->file('image')))
        {

            if(!empty($save->image) && file_exists('public/our_team/'.$save->image))
                {
                    unlink('public/our_team/'.$save->image);
                }


           $file = $request->file('image');
           $randomStr = Str::random(30);
           $filename = $randomStr.'.'.$file->getClientOriginalExtension();
           $file->move('public/testimonials/',$filename);
           $save->image = $filename;
        }

        $save->save();
        return redirect('admin/testimonials/list')->with('success', 'Testimonials successfully Updated!' );
    }
    //  Delete part
    public function testimonials_delete($id, Request $request)
    {
        $insertRecord = TestimonialsDetailsModel::find($id);
        
        if(!empty($insertRecord->image) && file_exists('public/testimonials/'.$insertRecord->image))
        {
            unlink('public/testimonials/'.$insertRecord->image);
        }

        $insertRecord->delete();

        return redirect()->back()->with('error', 'Testimonials successfully Deleted!');
    }

}
