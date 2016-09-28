<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Xeber;

use App\User;



class AdminController extends Controller
{
    public function index(){
		
		return view('admin.create');
	
	}

    public function create(Request $reg){
    	
    	$new = new Xeber;
    	$new->news_title =$reg->title;
    	$new->news_text = $reg->text;
    	$new->category_id = 1;
    	$new->user_id = 2;

    	$new->save();

    	return redirect('/show'); 
    }	

    public function show(){

    	$data = Xeber::all();

    	$user = User::all();

    	return view('admin.news',compact('data','user'));
    }

    public function destroy($id){
    	
    	$delete = Xeber::find($id);

    	$delete->delete();

    	return redirect('/show');
    }        
}
