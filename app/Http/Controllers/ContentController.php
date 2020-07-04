<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Str;
//use Image;


class ContentController extends Controller
{
    public function create()
    {
    	return view('admin.content_create');
    }

    public function index()
    {
    	// content type 1 = video
    	$section1_big = Content::latest()->where('section', 1)->where('status', 1)->first();
    	$section1_small = Content::latest()->where('section', 1)->where('status', 1)->offset(1)->limit(4)->get();

    	$section2_big = Content::latest()->where('section', 2)->where('status', 1)->first();
    	$section2_small = Content::latest()->where('section', 2)->where('status', 1)->offset(1)->limit(4)->get();
    	return view('admin.content_index', compact('section1_big', 'section1_small', 'section2_big', 'section2_small'));
    }

    public function store(Request $request)
    {
    	$file_name = 'blank';
    	$request->validate([
    		'content_title' => 'required|unique:contents',
    		'content_type'  => 'required',
    		'content_body'  => 'required',
    		'content_image' => 'required|mimes:mpeg,ogg,mp3,mp4,jpeg,png,tif',
    		'status'        => 'required',
    		'section'       => 'required',
    		]);

    	if($request->content_video){



    	 if ($request->hasFile('content_image')) {
            $photo = $request->file('content_image');
            $file_name = uniqid('photo_' , true).Str::random(10).'.'.$photo->getClientOriginalExtension();
            if($photo->isValid()){
                $photo->storeAs('images' , $file_name);
            }   
        }

    	 if ($request->hasFile('content_video')) {
            $photo_1 = $request->file('content_video');
            $file_name_1 = uniqid('photo_' , true).Str::random(10).'.'.$photo_1->getClientOriginalExtension();
            if($photo_1->isValid()){
                $photo_1->storeAs('images' , $file_name_1);
            }   
        }


    	$content = new Content;
    	$content->content_title = $request->content_title;
    	$content->content_type = $request->content_type;
    	$content->content_body = $request->content_body;
    	$content->status = $request->status;
    	$content->section = $request->section;
    	$content->content_image = $file_name;
    	$content->content_video = $file_name_1;

    	$content->save();
    	return redirect()->route('contents');


    	}else{

    		 if ($request->hasFile('content_image')) {
            $photo = $request->file('content_image');
            $file_name = uniqid('photo_' , true).Str::random(10).'.'.$photo->getClientOriginalExtension();
            if($photo->isValid()){
                $photo->storeAs('images' , $file_name);
            }   
        }


    	$content = new Content;
    	$content->content_title = $request->content_title;
    	$content->content_type = $request->content_type;
    	$content->content_body = $request->content_body;
    	$content->status = $request->status;
    	$content->section = $request->section;
    	$content->content_image = $file_name;

    	$content->save();
    	return redirect()->route('contents');


    	}

    }


    public function show($id)
    {
    	$content = Content::find($id);

    	if($content->section == 1){
    		return view('admin.content_video_details',compact('content'));
    	}else{
    		return view('admin.content_post_details',compact('content'));
    	}

    }
}
