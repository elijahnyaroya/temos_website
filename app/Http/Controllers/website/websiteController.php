<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\blogdetail;
use App\Models\displaycourse;
use App\Models\sharelink;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    //
    public function aboutUsPage(){
        return view('website.aboutus');
    }

    public function termsandcondition(){
        return view('website.termsandcondition');
    }
    public function policies(){
        return view('website.policies');
    }

    public function mainHomepage(){
        return view('website.home');
    }

    public function contactUsPage(){
        return view('website.contactus');
    }

    public function loginRegister(){
        return view('website.loginRegister');
    }
    public function allCourses(){
        $courses = displaycourse::all();
        $popular = displaycourse::where("likes",">=","7")->take(7)->orderBy("id","desc")->get();
        return view('website.all_courses',["courses"=>$courses,"popular"=>$popular]);
    }
    public function faq(){
        return view('website.faq');
    }
    public function blog(){
        $blog = blog::orderBy("id","desc")->get();
        return view('website.blog',['blog'=>$blog]);
    }

    public function blogDetail($blogID){
        $blog = blog::where("id","=",$blogID)->first();
        $blogDetails = blogdetail::where("blogID","=",$blogID)->get();
        $blogExtra = blog::orderBy("id","desc")->get();
        return view('website.blog_detail',['blogID'=>$blogID,"blog"=>$blog,"blogExtra"=>$blogExtra,'blogDetails'=>$blogDetails]);
    }


}
