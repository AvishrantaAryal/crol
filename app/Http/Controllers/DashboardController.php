<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\QuickMail;
use Auth;
class DashboardController extends Controller
{
   public function home(){
   	$user=DB::table('users')->orderBy('id','DESC')->get()->first();  
    	 $mail = DB::table('quick_mails')->orderBy('id','Desc')->get()->take(5);
   	return view('cd-admin.home.home',compact('user','mail'));
   }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }

     public function quickmail(){
   $data = Request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('quick_mails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');
	return redirect('/cd-admin');
    }

     public function view(){
    	$t =	DB::table('quick_mails')->orderBy('id', 'DESC')->paginate(10);
    	return view('cd-admin.home.mails',compact('t'));
    }

    public function adminview(){
        $admin = DB::table('users')->where('name','!=','creatudevelopers')->get()->all();
        return view('cd-admin.admin.admin',compact('admin'));
    }

    public function del($id){
    	 DB::table('quick_mails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }
}


