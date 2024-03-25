<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    //Home Page
		public function index()
		{
			
			$data['posts'] = News::orderBy('id','desc')->paginate(6);
			
			return view('index',$data);
		}

		
	
	
}
