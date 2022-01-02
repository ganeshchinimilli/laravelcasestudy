<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search=$req['search']??"";
if($search!=""){
$members=post::where('name','LIKE',"%".$search."%")->paginate(2);
}else{
    //  $members=post::select('status','Pending')->paginate(2);
     $members=post::where("status","Approved")->paginate(6);


}
$data=compact('members','search');
        
// $data = htmlspecialchars($data);
// $newData = json_decode($data);


    // $data= DB::table('users')->simplePaginate(1);
    return view('home')->with($data);
       
    }
    public function adminHome()
    {
        $search=$req['search']??"";
        if($search!=""){
        $members=post::where('name','LIKE',"%".$search."%");
        }else{
            //  $members=post::select('status','Pending')->paginate(2);
             $members=post::all();
        
        
        }
        $data=compact('members','search');
                
        // $data = htmlspecialchars($data);
        // $newData = json_decode($data);
        
        
            // $data= DB::table('users')->simplePaginate(1);
            return view('admin')->with($data);
        
    }
}
