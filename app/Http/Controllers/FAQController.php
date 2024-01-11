<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    public function faq()
    {
        return view('admin.faq.list');
    }
}
