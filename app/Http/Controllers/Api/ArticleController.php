<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleCollection;
use App\Models\Article;
 

class ArticleController extends Controller
{
    //
    public function index()
    {
       return new ArticleCollection(Article::all());
    }

    
    /* Route::get('/fjifijfij', function () {
        return new UserCollection(User::all());
    }); */
}
