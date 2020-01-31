<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait dashboardtrait
{
	public function quick()
    {
                $data = Request()->validate([
            'email' => 'email|required',
            'message' => 'required',
        ]);
        Mail::to($data['email'])->send(new QuickMail($data));
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $merge = array_merge($data,$a);
        DB::table('quick_mails')->insert($merge);
        Session::flash('Success');
    }
}
?>