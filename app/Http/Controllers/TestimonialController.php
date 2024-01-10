<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestimonialsModel;

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


}
