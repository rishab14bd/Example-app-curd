<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

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

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/index', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');

Route::get('/all_session', function(){
    $session = session()->all();
    echo '<pre>';
    print_r($session);
    echo '</pre>';
});

Route::get('/set_session', function(Request $request){
    $request->session()->put('user_name', 'kapil choudhary');
    $request->session()->put('user_id', '1222');
    return redirect('all_session');
});

Route::get('/destory_session', function(){
    session()->forget(['user_name', 'user_id']);
    return redirect('/all_session');
});