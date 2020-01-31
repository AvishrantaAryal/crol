<?php
namespace App\Traits;

use App\About;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait abouttrait
{
	use imagetrait;
	public function add(){
		return view('cd-admin.about.add-about');
	}

	public function view(){
		$about = DB::table('abouts')->get()->first();
		return view('cd-admin.about.view-about',compact('about'));
	}
	public function edit(){
	$about = DB::table('abouts')->get()->first();
		return view('cd-admin.about.edit-about',compact('about'));	
	}

	public function store(){
		$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);

        DB::table('abouts')->Insert($replace);
        Session::flash('success');
        return redirect('/abouts-view');
	}

	public function updateabout(){
		$data = $this-> updatevalidation();
		
			$test = DB::table('abouts')->get()->first();
			if(isset($data['image'])){
			if (file_exists('imageupload/'.$test->image)) 
			{
				unlink('imageupload/'.$test->image);
			}


			$test = $this->insertimage($data['image']);
			$a['image'] = $test ;
			}
			$a['updated_at'] =Carbon::now('Asia/Kathmandu');
			$replace = array_replace($data,$a);

			$data = DB::table('abouts')->update($replace);

		Session::flash('updatesuccess');
		return redirect('/abouts-view');

	}


	public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'summary'=>'required',
        'description' => 'required',
        'image' => 'required|image',
        'image_alt' => 'required',
        'title'=>'required',
        'establishment'=>'required',
        'objective'=>'required',
        'mission'=>'required',
        ]);
        return $data;
    }

        public function updatevalidation()
    {
         $data =  Request()->validate([
        
        'summary'=>'required',
        'description' => 'required',
        'image' => '',
        'image_alt' => 'required',
        'title'=>'required',
        'establishment'=>'required',
        'objective'=>'required',
        'mission'=>'required',
        ]);
        return $data;
    }

}
?>