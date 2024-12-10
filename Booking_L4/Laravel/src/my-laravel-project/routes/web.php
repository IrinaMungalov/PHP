<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Здесь вы можете зарегистрировать маршруты веб-приложения.
| Эти маршруты загружаются через группу middleware "web".
| Следовательно, создавайте что-то великое!
|
*/


Route::get('/', function () {
    $posts = Post::with('category')->paginate(10); 
    return view('home', compact('posts')); 
});



// Route::get('post/{id}', function ($id) {
//     $post = Post::with('category')->findOrFail($id); 
//     return view('post', compact('post')); 
// });

Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('language/{lang}', function ($lang) {
    if (in_array($lang, ['ru', 'ro'])) { // Проверяем доступные языки
        App::setLocale($lang); // Устанавливаем локаль
        session()->put('locale', $lang); // Сохраняем язык в сессии
    }
    return redirect()->back(); // Возвращаем пользователя на предыдущую страницу
})->name('lang.switch');