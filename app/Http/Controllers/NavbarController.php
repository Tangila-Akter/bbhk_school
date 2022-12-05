<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Calender;
use App\Models\Job;
use App\Models\Routine;
use App\Models\Syllabus;
use App\Models\Exam;
use App\Models\Governing;
use App\Models\School;
use App\Models\Staffs_Doc;
use App\Models\Result;

class NavbarController extends Controller
{

    public function home()
    {
        return view('user.home');
    }
    public function about()
    {
        return view('user.about');
    }
    public function notice1()
    {
        $data=notice::all();
        return view('user.notice1',compact("data"));
        
    }
    public function calender1()
    {
        $data=calender::all();
        return view('user.calender1',compact("data"));
        
    }
    public function gallery()
    {
        return view('user.gallery');
    }
    public function results()
    {
        $data=result::all();
        return view('user.results',compact("data"));
    }
    public function payment()
    {
        return view('user.payment');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function admission()
    {
        return view('user.admission');
    }
    public function rules()
    {
        return view('user.rules');
    }
    public function routine_doc()
    {
        $data=routine::all();
        return view('user.routine',compact("data"));
    }
    public function syllabus_doc()
    {
        $data=syllabus::all();
        return view('user.syllabus',compact("data"));
    }
    public function exam_doc()
    {
        $data=exam::all();
        return view('user.exam_doc',compact("data"));
    }
    public function calender()
    {
        return view('user.calender');
        
    }
    public function governing_doc()
    {
        $data=governing::all();
        return view('user.governing',compact("data"));
    }
    public function school_doc()
    {
        $data=school::all();
        return view('user.school_doc',compact("data"));
    }
    public function staff_doc()
    {
        $data=staffs_doc::all();
        return view('user.staff_doc',compact("data"));
    }
    public function job()
    {
        $data=job::all();
        return view('user.job',compact("data"));
    }



}
