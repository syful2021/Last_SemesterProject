<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\WatchNowModel;
use App\Http\Controllers\Controller;
use App\Models\FeaturesModel;
use App\Models\OurTeamModel;
use App\Models\PositionModel;
use App\Models\TestimonialsModel;
use App\Models\TestimonialsDetailsModel;
use App\Models\FaqModel;
use App\Models\FaqDetailsModel;
use Illuminate\Http\Request;
use Str;



class HomeController extends Controller
{
    public function index(){

        $data['getRecord'] = HomeModel::all();
        $data['getAbout'] = AboutModel::all();
        $data['getWatchNow'] = WatchNowModel::all();
        $data['getFeatures'] = FeaturesModel::all();
        $data['getOurTeam'] = OurTeamModel::all();
        $data['getPosition'] = PositionModel::all();
        $data['getTestimonials'] = TestimonialsModel::all();
        $data['getTestimonialsDetails'] = TestimonialsDetailsModel::get();
        $data['getFaq'] = FaqModel::all();
        $data['getFaqDetails'] = FaqDetailsModel::get();
        
       return view('index', $data);
    }

    //home page
    public function admin_home(Request $request)
    {

        $data['getRecord'] = HomeModel::all();
        return view('admin.home.list', $data);
    }

    // admin_home_post

    public function admin_home_post(Request $request){

    if($request->add_to_update == "Add")
    {
        $insertRecord = request()->validate([
            'image_one'=>  'required',
            'image_two'=>  'required',
            'image_three'=>  'required',

        ]);

        $insertRecord = new HomeModel;
    }else{

        $insertRecord = HomeModel::find($request->id);
    }

         $insertRecord->title          = trim($request->title);
         $insertRecord->sub_title      = trim($request->sub_title);
         $insertRecord->home_url       = trim($request->home_url);
         $insertRecord->sub_title_two  = trim($request->sub_title_two);
         $insertRecord->description    = trim($request->description);

         // first image

         if(!empty($request->file('image_one')))
         {
            if(!empty($insertRecord->image_one) && file_exists('public/img/'.$insertRecord->image_one))
                {
                    unlink('public/img/'.$insertRecord->image_one);
                }

            $file = $request->file('image_one');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->image_one = $filename;
         }

         // second image

         if(!empty($request->file('image_two')))
         {
            if(!empty($insertRecord->image_two) && file_exists('public/img/'.$insertRecord->image_two))
                {
                    unlink('public/img/'.$insertRecord->image_two);
                }

            $file = $request->file('image_two');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->image_two = $filename;
         }

         //third image

         if(!empty($request->file('image_three')))
         {
            if(!empty($insertRecord->image_three) && file_exists('public/img/'.$insertRecord->image_three))
                {
                    unlink('public/img/'.$insertRecord->image_three);
                }

            $file = $request->file('image_three');
            $randomStr = Str::random(30);
            $filename = $randomStr.'.'.$file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->image_three = $filename;
         }
         $insertRecord->save();
         return redirect()->back()->with('success', 'Home page successfully saved');

    }

}
