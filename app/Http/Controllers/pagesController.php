<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\subscription;
use App\Models\read;
use App\Models\course;
use App\Models\chapter;
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
        $courses = course::all();

        $coursesCounter = course::count();

        return view('courses', compact('courses', 'coursesCounter'));
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function read($id){
         $read = read::join('authors', 'reads.author_id', '=', 'authors.id')
        ->join('chapters', 'reads.chapter_id', '=', 'chapters.id')
        ->join('courses', 'chapters.course_id', '=', 'courses.id')
        ->where('chapters.id', '=', $id)
        ->select('reads.*', 'authors.first_name', 'authors.last_name', 'chapters.chapter', 'courses.course')
        ->get();

        $chosenCourse = session()->get('selectedCourse');
        $chapters = session()->get('Chapters');

      
        $chaptersCounter = chapter::join('courses', 'chapters.course_id', '=', 'courses.id')
        ->where('courses.id', '=', $id)
        ->count();

        $courses = course::all();

        return view('read', compact('chapters', 'chosenCourse', 'read', 'chaptersCounter', 'courses'));
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
        //$posts = read::count();
        $messages = message::count();    
        return view('admin.index', compact('users', 'subscribers', 'messages'));
        }
}
