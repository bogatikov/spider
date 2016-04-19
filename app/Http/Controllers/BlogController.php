<?php

namespace App\Http\Controllers;

use App\Models\News;
use Request;

use App\Http\Requests;

class BlogController extends Controller
{
    //
    public function index(News $news)
    {
        $data = $news->getPublished()->paginate(5);
        if (Request::ajax()) {
            return [
                'title' => 'Блог',
                'content' => view('blog.ajax.index', ['news' => $data])->render(),
            ];
        } else {
            return view('blog.index', ['title' => 'Блог', 'news' => $data]);
        }
    }

    public function show(News $news, $slug)
    {
        $data = $news->getBySlug($slug);
        if (Request::ajax()) {
            return [
                'title' => $data->title,
                'content' => view('blog.ajax.show', ['news' => $data])->render(),
            ];
        } else {
            return view('blog.show', ['news' => $data]);
        }
    }
}
