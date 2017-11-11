<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Form;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['forms'] = Form::has('video', '<=', 0)->get();
        $data['videos'] = Video::all();
        return view('home', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'form_id' => 'required',
        ]);
        $video = $request->all();
        $youtube_link = strpos($video['url'], 'youtube');
        $youtube_link_correct = strpos($video['url'], 'watch?');
        if(!$youtube_link || !$youtube_link_correct){
            return redirect()->route('home')->with('status', 'O link não esta correto ou não é um link do youtube!!');
        }
        Video::create($request->all());
        return redirect()->route('home')->with('status', 'Cadastro efetuado com sucesso!!');
    }
}