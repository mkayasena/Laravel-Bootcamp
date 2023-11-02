<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function AboutPage()
    {
        $aboutPage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutPage'));
    }
    public function UploadAbout(Request $request)
    {
        $about_id = $request->id;
        if($request->file('about_image'))
        {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(520,600)->save('upload/home_about/'.$name_gen);

            $save_url = 'upload/home_about/'.$name_gen;

            About::findOrfail($about_id)->update([
                'title'=> $request->title,
                'sub_title'=> $request->sub_title,
                'description'=> $request->description,
                'sub_description'=> $request->sub_description,
                'about_image'=> $save_url,
            ]);

            $notification = array(
                'message' => 'About Page Updated Succesfully with Image',
                'alert-type' => 'success',
            );

            return Redirect()->back()->with($notification);
        }
        else
        {
            About::findOrfail($about_id)->update([
                'title'=> $request->title,
                'sub_title'=> $request->sub_title,
                'description'=> $request->description,
                'sub_description'=> $request->sub_description,
            ]);

            $notification = array(
                'message' => 'About Page Updated Succesfully without Image',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
    }
}
