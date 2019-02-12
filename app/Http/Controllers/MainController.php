<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\About;
	use App\Models\IntroContent;
	
	class MainController extends Controller {
		
		function index() {
			$about = About::whereNull( 'deleted_at' )->get()->first();
			$intro = IntroContent::whereNull( 'deleted_at' )->orderBy( 'id', 'DESC' )->get()->all();
			
			
			return view( 'index' )->with( 'about', $about )->with( 'intro', $intro );
		}
	}