<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticleController extends Controller
{
    public function show(Article $article){
        // render a single resource
        return view('articles.show', ['article' => $article]);
    }

    public function index(){
        // render a list of resource

        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstorfail()->articles;
        }else{
            $articles = Article::paginate(6);
        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function create(){
        // new resource
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store(){
        // persist the new resource
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect(route('articles.index'));
    }

    public function edit(Article $article){
        // show a view to edit 
        return view('articles.edit', compact('article'));
        /* Or like this
            return view('articles.edit', ['article' => $article ]);

        */
    }

    public function update(Article $article){
        // persist the edited resource
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    public function destroy(){
        // delete the resource
    }

    protected function validateArticle(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}