<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestimonialsModel;

class TestimonialController extends Controller
{

    public function  testimonials_list(Request $request)
    {
        return view('admin.testimonials.list');
    }

    public function  testimonials_post(Request $request)
    {
        // dd($request->all());

        $save = new TestimonialsModel;
        $save->title        = trim($request->title);
        $save->description        = trim($request->description);
        $save->save();

        return redirect()->back()->with('success', 'Testimonials successfully saved!');

    }


}
