<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\Facades\Image;

class HomeSlideController extends Controller
{
    public function HomeSlide()
    {
        $homeSlider = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeSlider'));
    }
    public function UploadSlide(Request $request)
    {
        $slide_id = $request->id;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(500,600)->save('upload/home_slider/'.$name_gen);

            $save_url = 'upload/home_slider/'.$name_gen;

            HomeSlide::findOrfail($slide_id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'button_url'=> $request->button_url,
                'image'=> $save_url,
            ]);

            $notification = array(
                'message' => 'Home Slide Updated Succesfully with Image',
                'alert-type' => 'success',
            );

            return Redirect()->back()->with($notification);
        }
        else
        {
            HomeSlide::findOrfail($slide_id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'button_url'=> $request->button_url,
            ]);

            $notification = array(
                'message' => 'Home Slide Updated Succesfully without Image',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
    }
}
