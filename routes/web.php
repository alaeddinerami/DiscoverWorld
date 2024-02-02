 <?php

use App\Http\Controllers\AventureController;
use Illuminate\Support\Facades\Route;


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

Route::get('/home/create', [AventureController::class,'create'])->name('create');
Route::get('/', [AventureController::class,'index'])->name('index');

Route::post('/home/store', [AventureController::class,'store'])->name('store');


// Route::get('/home', function () {
//     return view('home');
// });
