<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Http;


class MangaController extends Controller
{
  
    public function genres()
    {
        $results = Http::get('https://api.jikan.moe/v4/genres/anime')->json();

        return view('manga.genres', compact('results'));
    }

    
    public function list($id)
    {
        $results = Http::get("https://api.jikan.moe/v4/anime?genres={$id}")->json();

        return view('manga.list-genres', compact('results'));
    }

    
    public function show($id)
    {
        $result = Http::get("https://api.jikan.moe/v4/anime/{$id}")->json();

        return view('manga.show', compact('result'));
    } 
  
}
