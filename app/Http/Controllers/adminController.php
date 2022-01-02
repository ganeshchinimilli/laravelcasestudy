<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    
    public function approve($id)
    {
        $state = DB::update("update posts set status=? where id=?", ['Approved', $id]);
    
            return redirect('/admin/home');
       
    }
    public function pending($id)
    {
        $result = DB::update("update posts set status=? where id=?", ['Pending', $id]);
      
            return redirect('/admin/home');
        
    }
    public function delete($id)
    {
        $main = post::where('id', $id)->delete();

            return redirect('/admin/home');
     
    }
    public function restore($id)
    {
        $main = post::onlyTrashed()->where('id', $id)->restore();
 
            return redirect('/admin/archived');
        
    }
    public function permanent($id)
    {
        $main = post::where('id', $id)->forceDelete();
   
            return redirect('/admin/archived');
       
    }
    public function archived()
    {
        $main=post::onlyTrashed()->get();
        
        return view('archived')->with('main', $main);
   
    }
    public function more($id)
    {
        $one=post::where('id',$id)->get();
        
        return view('more')->with('one', $one);
   
    }
}
