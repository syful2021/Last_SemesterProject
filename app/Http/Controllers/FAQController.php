<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaqModel;
use App\Models\FaqDetailsModel;


class FAQController extends Controller
{

    public function faq()
    {

        $data['getRecord'] = FaqModel::all();

        return view('admin.faq.list', $data);
    }

    public function faq_post(Request $request)
    {
        if($request->add_to_update == 'Add')
        {
            $save = new FaqModel;
        }else{
            $save = FaqModel::find($request->id);
        }

        $save->title        = trim($request->title);
        $save->description  = trim($request->description);
        $save->save();

        return redirect()->back()->with('success' , 'FAQ Successfully saved!');
    }

    public function faq_list(Request $request)
    {
        $data['getRecord'] = FaqDetailsModel::get();
        return view('admin.faq.faq_list', $data);

    }

    public function faq_add(Request $request)
    {
        return view('admin.faq.faq_add');
    }

    public function faq_add_post(Request $request)
    {
        $save = new FaqDetailsModel;
        $save->title             = trim($request->title);
        $save->description      = trim($request->description);


        $save->save();
        return redirect('admin/faq/list')->with('success', 'FAQ successfully saved!' );

    }
    //FAQ Edit
    public function faq_edit($id, Request $request)
    {
        $data['getRecord'] = FaqDetailsModel::find($id);
        return view('admin.faq.faq_edit', $data);
    }

    public function faq_edit_update($id, Request $request)
    {
        $save = FaqDetailsModel::find($id);

        $save->title             = trim($request->title);
        $save->description      = trim($request->description);
        $save->save();

        return redirect('admin/faq/list')->with('success', 'FAQ successfully Updated!' );
    }

    public function faq_delete($id, Request $request)
    {
        $deleteRecord = FaqDetailsModel::find($id);
        $deleteRecord->delete();

        return redirect('admin/faq/list')->with('error', 'FAQ successfully Deleted!');
    }

}
