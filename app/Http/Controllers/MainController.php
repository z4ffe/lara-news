<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function mainPage()
    {
        $news = News::all();
        return view('pages.main', ['news' => $news]);
    }
}
