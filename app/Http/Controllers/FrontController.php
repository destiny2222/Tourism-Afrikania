<?php

namespace App\Http\Controllers;

use App\Models\BuildAfrika;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $post = Post::paginate(3);
        $event = Event::paginate(3);
        $course = Course::paginate(3);
        return view('frontend.index', compact('event', 'course', 'post'));
    }

    public function event(){
        $event = Event::paginate(6);
        return view('frontend.event', compact('event'));
    }

    public function eventDetails(Event $event){
        // recent event
        $recentevent = Event::latest()->paginate(3);
        return view('frontend.event_details', compact('event', 'recentevent'));
    }

    public function postDetails(Post $post){
        // recent post
        $recentpost = Post::latest()->paginate(3);
        $category = Category::orderBy('id', 'desc')->get();
        $tag =  Tag::orderBy('id', 'desc')->get();
        return view('frontend.blog-details', compact('post', 'recentpost', 'category','tag'));
    }

    public function about(){
        $team = Team::orderBy('id', 'desc')->get();
        $partner = Partner::orderBy('id', 'desc')->get();
        return view('frontend.about', compact('team', 'partner'));
    }

    public function services(){
        return view('frontend.service');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        $gallery = Gallery::paginate(10);
        return view('frontend.gallery', compact('gallery'));
    }

    public function blog(){
        $post = Post::paginate(6);
        return view('frontend.blog', compact('post'));
    }

    public function blog_details(){
        return view('frontend.blog_details');
    }

    public function registerPage(){
        return view('frontend.event_register');
    }

    public function course(){
        $course = Course::paginate(6);
        return view('frontend.course', compact('course'));
    }

    public function showByCategory(CourseCategory $Coursecategory){
        $courses = $Coursecategory->courses()->paginate(10);
        return view('frontend.showcourse-category', compact('Coursecategory', 'courses'));
    }

    public function courseDetails(Course $course){
        $recent = Course::latest()->paginate(3);
        return view('frontend.course_details', compact('course', 'recent'));
    }


    public function buildafrika(){
        $winners = BuildAfrika::all();
        return view('frontend.buildafrika', compact('winners'));
    }

    public function community(){
        return view('frontend.community');
    }


    public function registeration(){
        return view('frontend.register');
    }

    public function register1(){
        return view('frontend.register_free');
    } 
    public function register2(){
        return view('frontend.register_1');
    } 
    public function register3(){
        return view('frontend.register_2');
    } 
    public function register4(){
        return view('frontend.register_3');
    } 

}
