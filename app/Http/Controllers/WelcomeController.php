<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class WelcomeController extends Controller
{
    public function index()
    {
    	$data['forms'] = Form::all();
    	/*** Fazemos o tratamento da urlque vem do youtube ***/
    	foreach($data['forms'] as $form){
    		if($form->video){
    			$youtube_link = strpos($form->video['url'], 'youtube');
    			$youtube_link_correct = strpos($form->video['url'], 'watch?');
    			if($youtube_link && $youtube_link_correct){
		    		parse_str(str_replace('https://www.youtube.com/watch?', '', $form->video['url']), $output);
		    		$form->video['url'] = 'https://www.youtube.com/embed/' . $output['v'];
		    	}
	    	}
    	}
        return view('welcome', $data);
    }
}
