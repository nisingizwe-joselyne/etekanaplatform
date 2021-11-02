<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subscription;
use App\Models\post;
use App\Models\topic;
use App\Models\course;
use App\Models\message;

class pagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function aboutUs(){
        return view('about-us');
    }

    
    public function courses(){
        $topics = course::all();

        $courses = topic::join('authors', 'topics.author_id', '=', 'authors.id')
        ->join('courses', 'topics.course_id', '=', 'courses.id')
        ->select('topics.*', 'authors.first_name', 'authors.last_name', 'courses.course')
        ->get();

        $coursesCounter = topic::join('authors', 'topics.author_id', '=', 'authors.id')
        ->join('courses', 'topics.course_id', '=', 'courses.id')
        ->select('topics.*', 'authors.first_name', 'authors.last_name', 'courses.course')
        ->count();

        return view('courses', compact('courses', 'topics', 'coursesCounter'));
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function blog(){
        return view('blog');
    }

    public function faqs(){
        return view('faqs');
    }

    public function admin(){
        $users = user::count();
        $subscribers= subscription::count();
        $posts = post::count();
        $messages = message::count();    
        return view('admin.index', compact('users', 'subscribers', 'posts', 'messages'));
        }
}
