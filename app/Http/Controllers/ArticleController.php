<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //

    public function search(Request $request)
    {
        $value = $request->get('search');
        $articles = DB::table('articles')->where('name', 'like', '%'.$value.'%')->paginate(5);
        dd($articles);
        // TODO: CREATE VIEW VOOR SEARCH
    }
}
