<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


Route::get('/clean-json', function () {

    $response = Http::get('https://coderbyte.com/api/challenges/json/json-cleaning');

    $data =  $response->object();
    // return $data;
    
    foreach ($data as $key => $item) {
        if (is_object($item)) {
            return $item;
        }
        
        if (is_array($item)){
            //  Scan through inner loop
            foreach ($item as $key2 => $value) {
                dd($item);
                if ($value=='') {
                    unset($item[$key2]);
                }
            }
        }
        else{
            // one, two, three
            // echo $item;
        }
    }
    return $data;


})->name('json');

Route::get('/json', function () {

    $response = Http::get('https://coderbyte.com/api/challenges/json/age-counting');

    $data =  $response->object();
    
    $arr = explode(",",$data->data);

    // return $arr;
    
    $data = [];

    foreach ($arr as $item) {
        $str = str_replace(' ', '', $item);

        $key = strtok($str, '=');
        $value = (int)substr($item, strpos($item, '=')+1);

        if ($key == 'age' && $value >=50) {
            $arr_item = [$key => $value];
            array_push($data,$arr_item);
        }
    }

    return count($data);

    foreach ($data as $item) {
       return $item;
    }


})->name('json');


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::post('/service',[ServiceController::class,'store'])->name('service.store');

Route::prefix('admin')->middleware(['auth','web'])->group(function () {

    Route::redirect('/', 'admin/dashboard');
    Route::get('/edit_profile',[ProfileController::class,'edit_profile']);
    Route::post('/update_profile',[ProfileController::class,'update_profile']);
    Route::post('/update_password',[ProfileController::class,'update_password']);



    Route::resource('/users',UserController::class);


    Route::get('/dashboard',[ServiceController::class,'index']);
    Route::get('/service/{id}/files',[ServiceController::class,'filesPage']);


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
});
require __DIR__ . '/auth.php';
