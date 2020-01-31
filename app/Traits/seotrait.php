<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait seotrait
{
	public function insertseo()
	{
		$data = Request()->validate([
    		'page_name' => 'required|unique:seos',
    		'seo_title' => 'required',
    		'seo_description' => 'required',
    		'seo_keyword' => 'required',
    	]);

    	$a['created_at'] =Carbon::now('Asia/Kathmandu');
    	$merge = array_merge($data,$a);
    	DB::table('seos')->insert($merge);
    	Session::flash('UpdateSuccess');
	}

	public function updateseo($id)
	{
		$data = Request()->validate([
    		'page_name' => 'required',
    		'seo_title' => 'required',
    		'seo_description' => 'required',
    		'seo_keyword' => 'required',
    	]);
    	$a['updated_at'] = Carbon::now('Asia/Kathmandu');
    	$merge =array_merge($data,$a);
    	DB::table('seos')->where('id',$id)->update($merge);
    	Session::flash('UpdateSuccess');
	}

}
?>