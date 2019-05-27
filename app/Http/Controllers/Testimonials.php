<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\DB;

class Testimonials extends Controller
{
    //

    public function welcome()
    { 
       return view('welcome');
    }

    public function landing()
    {
       //$testimonies =  DB::table('testimonials')->where('status','post')->get()->paginate(15);
       $testimonies = DB::table('testimonials')->where('status', 'post')->orderBy('created_at', 'DESC')->paginate(15);

       if ($testimonies->isEmpty())
       {
         $testimonies = null;

         return view('landingpage')->withTestimonies($testimonies);
       }

       if ($request->ajax()) {
    		$view = view('data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }
       return view('landingpage')->withTestimonies($testimonies);
    }

    
}
