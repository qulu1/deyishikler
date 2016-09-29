<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Xeber;

use App\User;

use App\Category;




class AdminController extends Controller
{
    public function index(){
		
        $data = Category::all();

		return view('admin.create',compact("data"));
	
	}

    public function create(Request $reg){
    	
    	$new = new Xeber;
    	$new->news_title =$reg->title;
    	$new->news_text = $reg->text;
    	$new->category_id = $reg->cat;
    	$new->user_id = 2;

    	$new->save();

    	return redirect('/show'); 
    }	

    public function show(){

    	$data = Xeber::all();

    	$user = User::all();

    	return view('admin.news',compact('data','user'));
    }
    
    public function edit(Xeber $xeber){

        return view("admin.edit",compact('xeber'));

    }

    public function update(Request $request,$id){

        $xeber = Xeber::find($id);

        $xeber->news_title = $request->title;
        $xeber->news_text = $request->text;
        $xeber->category_id = 1;
        $xeber->user_id = 2;

        $xeber->save();

        return redirect('/show');
}

    public function destroy($id){

        $xeber = Xeber::find($id);

        $xeber->delete();


        return redirect('/show');
    }



    

}
