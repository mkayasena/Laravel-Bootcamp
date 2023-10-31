<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSlideController extends Controller
{
    public function HomeSlide()
    {
        return view('admin.home_slide.home_slide_all');
    }
}
