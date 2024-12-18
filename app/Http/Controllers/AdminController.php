<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index_view()
    {
        // $categories = setevent::distinct()->pluck('set_category');
        return view("admin.gallery");

        
    }
    public function sidegallery_view()
    {
        // $categories = setevent::distinct()->where("set_category","!=","event")->pluck('set_category');
        
        return view ("admin.sidegallery");
    }
}
