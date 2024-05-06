<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Http\Controllers\PostController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::resource('/posts', PostController::class);

Route::get('/unavailable', function(){
    return view('unavailable');
})->name('unavailable');

Route::get('/contact', function(){
    $posts = Post::all();
    return view('contact', compact('posts'));
});

Route::get('/sessions', function(Request $request){
    if ($request->session()) {
        // Truy cập vào session và lấy tất cả dữ liệu
        $data = $request->session()->all();
        dd($data);
    } else {
        // Xử lý trường hợp khi session không tồn tại hoặc có giá trị null
        dd('Session does not exist or is null');
    }
});

Route::get('/send-mail', function(){
    // Mail::raw('HEllo', function($message){
    //     $message->to('test@gmail.com')->subject('noreplay');
    // });
    Mail::send(new OrderShipped);
    dd('success');
});
