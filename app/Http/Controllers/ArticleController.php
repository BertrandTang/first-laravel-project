<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show($id): View
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', ['article' => $article]);
    }

    public function create()
    {
        $articles = [
            [
                'title' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
            ],
            [
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.',
            ],
            [
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.',
            ],
        ];

        foreach ($articles as $data) {
            Article::create($data);
        }

        return 'Les 3 articles ont été créés avec succès.';
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);
        $article->update(['title' => 'Nouveau titre', 'description' => 'Nouvelle description']);

        return 'L\'article a été mis à jour avec succès.';
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 'L\'article a été supprimé avec succès.';
    }
}
