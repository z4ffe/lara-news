<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected NewsService $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->$newsService = $newsService;
    }

    function createNews(Request $request)
    {
        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        dd('$this->newsService');
        return redirect(route('name.main'));
    }

    function removeNews($id)
    {
        $new = News::findOrFail($id);
        $new->delete();

        return redirect(route('name.main'));
    }
}
