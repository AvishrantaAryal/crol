<?php
namespace App\Traits;

use App\Gallery;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait gallerytrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.gallery.addgallery');
	}

	public function store(){
    	$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('galleries')->Insert($replace);
        
        Session::flash('success');
        return redirect('/album-view');
    }


    public function view(){
    	$gal = Gallery::get()->all();
    	$er = Gallery::all();
    	return view('cd-admin.gallery.viewalbum',compact('gal','er'));
    }

     
    public function status($id)
	{
	  $a = [];
	  $test = DB::table('galleries')->where('id',$id)->get()->first();
	    if($test->status=='active')
	        {
	            $a['status'] = 'inactive';
	        }
	    else
	        {
	            $a['status'] = 'active'; 
	        }
	    	DB::table('galleries')->where('id',$id)->update($a);
	    	return redirect('/album-view');
	    }

	  public function deletealbum($id){
	  		
		$ga = DB::table('galleries')->where('id',$id)->get()->first();
        if(file_exists('imageupload/'.$ga->image)) 
    	{
        unlink('imageupload/'.$ga->image);
   		 }

        	DB::table('galleries')->where('id',$id)->delete();
		Session::flash('deletesuccess');
		return redirect('/album-view');
		 }
      

	  

	  

       public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'image' => 'required|image',
        'image_alt' => 'required',
        'status'=>'required',
        ]);
        return $data;
    }
   

}

?>