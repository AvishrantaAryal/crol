<?php
namespace App\Traits;

use App\Background;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait backgroundtrait
{
	use imagetrait;
	public function add(){
		return view('cd-admin.crolbackground.add-background');
	}

	public function view(){
		$about = DB::table('backgrounds')->get()->first();
		return view('cd-admin.crolbackground.view-background',compact('about'));
	}
	public function edit(){
	$about = DB::table('backgrounds')->get()->first();
		return view('cd-admin.crolbackground.edit-background',compact('about'));	
	}

	public function store(){
		$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);

        DB::table('backgrounds')->Insert($replace);
        Session::flash('success');
        return redirect('/background-view');
	}

	public function update(){
		$data = $this-> updatevalidation();
		
			$test = DB::table('backgrounds')->get()->first();
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

			$data = DB::table('backgrounds')->update($replace);

		Session::flash('updatesuccess');
		return redirect('/background-view');

	}


	public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'summary'=>'required',
        'image' => 'required|image',
        'image_alt' => 'required',
        
        ]);
        return $data;
    }

        public function updatevalidation()
    {
         $data =  Request()->validate([
        
        'summary'=>'required',
        'image' => '',
        'image_alt' => 'required',
        
        ]);
        return $data;
    }

}
?>