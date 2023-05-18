<?php

namespace App\Http\Controllers;

use function;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

public function acceptArticle(Article $article){
    $article->update([
        'is_accepted' => true,
    ]);

    return redirect(route('revisor.dashboard'))->with('message', 'Hai accettato l\'artciolo scelto');

}

public function acceptArticle(Article $article){
    $article->update([
        'is_accepted' => false,
    ]);

    return redirect(route('revisor.dashboard'))->with('message', 'Hai rifiutato l\'artciolo scelto');
    
}

public function acceptArticle(Article $article){
    $article->update([
        'is_accepted' => NULL,
    ]);

    return redirect(route('revisor.dashboard'))->with('message', 'Hai riportato l\'articolo scelto di nuovo in revisione');
    
}