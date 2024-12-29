<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function createNews(Request $request)
    {
        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return redirect(route('name.main'));
    }

    function removeNews($id)
    {
        $new = News::findOrFail($id);
        $new->delete();

        return redirect(route('name.main'));
    }
}
