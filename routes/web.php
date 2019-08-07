<?php

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
use App\Docter;
use App\Herb;
use App\Spa;


Route::get('/', function () {
        $docter = Docter::inRandomOrder()->get();
        // $docterImg = DB::table('docter')
        //     ->select('image')->get();
        // foreach ($docterImg as $fileString) {
        //     // now we have one single file record
        //     // $docterImgArray = explode('|', $fileString);
        // }
        // dd($docterImg);
        $herb = Herb::inRandomOrder()->get();
        // $herbImg = DB::table('herbs')
        //     ->select('image')->get();
        // foreach ($herbImg as $fileString) {
        //     // now we have one single file record
        //     // $herbImgArray = explode('|', $fileString);
        // }
        // dd($herbImg);
        $spa = Spa::inRandomOrder()->get();
            foreach ($spa as $value) {
            $images = $value->image;
                if ($images === "") {
                    // dump(1);
                } else {
                    $spaImgArray = explode('|', $images);
                }
            }
                        // foreach ($spaImgArray as $key => $item) {
                        //     # code...
                        //     dump($item);
                        // }
        return view('welcome',compact('docter','herb','spa','spaImgArray'));
});


// Route::get('/order', 'cartController@index')->name('order');
Route::get('/cart/{id}', [
    'uses' => 'cartController@getAddToCart',
    'as' => 'herb.addTocart'
]);

Route::get('/shopping-cart', [
    'uses' => 'cartController@getCart',
    'as' => 'order'
]);
Route::post('/order', [
    'uses' => 'cartController@store',
    'as' => 'order.payment'
]);
Route::get('/my-order', [
    'uses' => 'cartController@getProfileOrder',
    'as' => 'order.profile'
]);
Route::patch('/payment', [
    'uses' => 'cartController@update',
    'as' => 'update.payment'
]);

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index')->name('dashboard');
        // DOCTER -----------------------------------
        Route::get('/docter-dashboard', 'admin\AdminController@docter')->name('docter-dashboard');
        Route::get('/add-docter', 'admin\AdminController@add_docter')->name('add-docter');
        Route::post('/add-docter-store', 'admin\AdminController@add_docter_store')->name('add-docter-store');
        Route::patch('/edit-docter-store/{id}', 'admin\AdminController@edit_docter_store')->name('edit-docter-store');
        Route::get('/edit-docter/{id}', 'admin\AdminController@edit_docter')->name('edit-docter');
        Route::delete('/delete-docter/{id}', 'admin\AdminController@delete_docter')->name('delete-docter');
        Route::get('/view-docter/{id}', 'admin\AdminController@view_docter')->name('view-docter');
        // DOCTER -----------------------------------
        // SPA --------------------------------------
        Route::get('/spa-dashboard', 'admin\AdminController@spa')->name('spa-dashboard');
        Route::get('/add-spa', 'admin\AdminController@add_spa')->name('add-spa');
        Route::post('/add-spa-store', 'admin\AdminController@add_spa_store')->name('add-spa-store');
        Route::get('/view-spa/{id}', 'admin\AdminController@view_spa')->name('view-spa');
        Route::get('/edit-spa/{id}', 'admin\AdminController@edit_spa')->name('edit-spa');
        Route::patch('/edit-spa-store/{id}', 'admin\AdminController@edit_spa_store')->name('edit-spa-store');
        Route::delete('/delete-spa/{id}', 'admin\AdminController@delete_spa')->name('delete-spa');
        // SPA --------------------------------------
        // HERB--------------------------------------
        Route::get('/herb-dashboard', 'admin\AdminController@herb')->name('herb-dashboard');
        Route::get('/add-herb', 'admin\AdminController@add_herb')->name('add-herb');
        Route::post('/add-herb-store', 'admin\AdminController@add_herb_store')->name('add-herb-store');
        Route::patch('/edit-herb-store/{id}', 'admin\AdminController@edit_herb_store')->name('edit-herb-store');
        Route::get('/edit-herb/{id}', 'admin\AdminController@edit_herb')->name('edit-herb');
        Route::delete('/delete-herb/{id}', 'admin\AdminController@delete_herb')->name('delete-herb');
        Route::get('/view-herb/{id}', 'admin\AdminController@view_herb')->name('view-herb');
        // HERB--------------------------------------
        // ORDER ------------------------------------
        Route::get('/order-dashboard', 'admin\AdminController@order')->name('order-dashboard');
        Route::get('/view-order/{id}', 'admin\AdminController@view_order')->name('view-order');

        Route::patch('/update', [
            'uses' => 'admin\AdminController@getUpdate',
            'as' => 'update.status'
        ]);
        // Route::post('/update', 'admin\AdminController@getUpdate')->name('update');
        // ORDER ------------------------------------
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/docter','docterController@index')->name('docter');
Route::get('/docter-detail/{id}','docterController@show')->name('docter-detail');
Route::get('/docter-search/{type}/{name}','docterController@search')->name('docter-search');
Route::get('/herb','herbController@index')->name('herb');
Route::get('/herb-detail/{id}','herbController@show')->name('herb-detail');
Route::get('/spa','spaController@index')->name('spa');
Route::get('/spa-detail/{id}','spaController@show')->name('spa-detail');
Route::get('/spa-search/{type}/{name}','spaController@search')->name('spa-search');
Route::get('/contact','contactController@index')->name('contact');
