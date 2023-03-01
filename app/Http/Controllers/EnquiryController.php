<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use DB;

class EnquiryController extends Controller
{
    //for Login
    public function login(Request $req)
    {
        if ($req->input('username') == 'admin' && $req->input('password') == 'nimda') {
            return redirect('enquiry');
        } else {
            return redirect('login');
        }
    }

    //for show Enquiries Form
    public function enquiry(Request $req)
    {
        $enquiry = new Enquiry;
        $enquiry->name = $req->input('name');
        $enquiry->gender = $req->input('gender');
        $enquiry->email = $req->input('email');
        $enquiry->phone = $req->input('phone');
        $enquiry->enquiry = $req->input('enquiry');
        $enquiry->source = implode(',', $req->input('source'));
        $enquiry->save();
        return redirect('enquiry');
    }

    //for show Enquiries List
    public function enquiryList()
    {
        $data = Enquiry::all();
        return view('enquiryList', ['data' => $data]);
    }
}
