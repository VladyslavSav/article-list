<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleController extends Controller
{
    public function getAll()
    {
        $articles = Article::paginate(10);
        return view('article.all', ['articles' => $articles]);
    }

    public function getById($id)
    {
        $article = Article::find($id);
        return view('article.single', ['article' => $article]);
    }

    public function deleteById($id)
    {
        Article::destroy($id);
        return redirect("article/all");
    }

    public function showEditView($id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function editById(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect("article/$id");
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect('article/all');
    }

    public function showAddView()
    {
        return view('article.add', ['1' => '1']);
    }
}
