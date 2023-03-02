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
        $enquiry->birth_date = date('Y-m-d',strtotime($req->input('birth_date')));
        $enquiry->email = $req->input('email');
        $enquiry->phone = $req->input('phone');
        $enquiry->enquiry = $req->input('enquiry');
        $enquiry->source = implode(',', $req->input('source'));
        $enquiry->save();
        return redirect('enquiry');
    }

    //for show Enquiries List & filter both common function created
    public function enquiryList(Request $req)
    {
        $data = Enquiry::all();
        $from='';
        $to='';
        if($req->filled('from_date') && $req->filled('to_date')){
            $from = $req->input('from_date');
            $to = $req->input('to_date');
            $data = Enquiry::whereBetween('birth_date', [$from, $to])->get();
        }
        return view('enquiryList', ['data' => $data,'from' => $from,'to' => $to]);
    }
}
