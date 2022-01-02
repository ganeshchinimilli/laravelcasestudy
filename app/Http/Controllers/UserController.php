<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
public function index(){
    return view('user.addpost');
}
public function Create(Request $request){
$post= new Post();
$post->title=$request['title'];
$post->description=$request['description'];
$name=$request->file('photo')->getClientOriginalName();
$request->file('photo')->move('uploads/', $name);
$post->image=$name;

$request->user()->posts()->save($post);
return redirect('/home')->with('success',"you dont have access to admin");;
}

}
