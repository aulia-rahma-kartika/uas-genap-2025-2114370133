<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_publish' => $request->has('is_publish'),
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $article->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_publish' => $request->has('is_publish'),
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
