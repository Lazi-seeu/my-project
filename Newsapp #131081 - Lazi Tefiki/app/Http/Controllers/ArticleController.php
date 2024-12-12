<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create-article");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'newsid' => 'required',
            'headline' => 'required',
            'articletext' => 'required',
            'author' => 'required',
            'isactive' => 'required',
            'datecreated' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect()->route('articles.index')->withErrors($validator);
        }

        Article::create([
            'newsid'=>$request->get('newsid'),
            'headline'=>$request->get('headline'),
            'articletext'=>$request->get('articletext'),
            'author'=>$request->get('author'),
            'isactive' => $request->get('isactive'), 
            'datecreated'=>$request->get('datecreated'),
            'priority'=>$request->get('priority'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Inserted Article');
    }

    /**
     * Display the specified resource.
     */
    public function show($newsid)
    {
        $article = Article::where("newsid",$newsid)->first();
        return view("article-details",compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($newsid)
    {
        $article = Article::where("newsid",$newsid)->first();
        return view("edit-article",compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $newsid)
    {
        $validator = Validator::make($request->all(), [
            'newsid' => 'required',
            'headline' => 'required',
            'articletext' => 'required',
            'author' => 'required',
            'isactive' => 'required',
            'datecreated' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('articles.edit', ['article' => $newsid])->withErrors($validator);
        }
    
        $article = Article::where('newsid', $newsid)->first();
        $article->newsid=$request->get('newsid');
        $article->headline=$request->get('headline');
        $article->articletext=$request->get('articletext');
        $article->author=$request->get('author');
        $article->isactive=$request->get('isactive');
        $article->datecreated=$request->get('datecreated');
        $article->priority=$request->get('priority');
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Updated Article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($newsid)
    {
        Article::where("newsid",$newsid)->delete();
        return redirect()->route('articles.index')->with('success','Deleted Article');
    }

    public function search(Request $request)
    {
        $termForSearching = $request->input('search');

        $articles = Article::where("headline","LIKE","%$termForSearching%")->
        orwhere("articletext","LIKE","%$termForSearching%")->get();
        
        return view("index",compact("articles"));
    }
}
