<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showWelcome', 'as' => 'Home'));

Route::get('/', function()
{
	$categories = Category::all();
	$products = Product::all();
	return View::make('index')->withCategories($categories)->withProducts($products);
});

## Login & register
Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('register', 'HomeController@getRegister');
Route::post('register', 'HomeController@postRegister');
Route::get('login', function()
{
	return View::make('login');
});
Route::get('logout', array('uses' => 'HomeController@logout', 'as' => 'LogOut'));

Route::get('/category/{id}', array('uses' => 'HomeController@getCategory', 'as' => 'getCategory'));

Route::get('contact', array('uses' => 'HomeController@contact', 'as' => 'Contact', 'before' => 'auth'));

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){

	Route::get('/', array('uses' => 'AdminController@welcome', 'as' => 'AdminIndex'));
	
	## Categories Routes	
	Route::get('/newCategory', array('uses' => 'AdminController@newCategory', 'as' => 'NewCategory'));
	Route::get('/deleteCategory/{id}', array('uses' => 'AdminController@deleteCategory', 'as' => 'DeleteCategory'));
	Route::get('/editCategory/{id}', array('uses' => 'AdminController@editCategory', 'as' => 'EditCategory'));
	Route::post('/storeCategory', array('uses' => 'AdminController@storeCategory', 'as' => 'storeCategory'));
	Route::post('/updateCategory/{id}', array('uses' => 'AdminController@updateCategory', 'as' => 'updateCategory'));

	## Products Routes
	Route::get('/newProduct', array('uses' => 'AdminController@newProduct', 'as' => 'NewProduct'));
	Route::get('/deleteProduct/{id}', array('uses' => 'AdminController@deleteProduct', 'as' => 'DeleteProduct'));
	Route::get('/editProduct/{id}', array('uses' => 'AdminController@editProduct', 'as' => 'EditProduct'));
	Route::post('/storeProduct', array('uses' => 'AdminController@storeProduct', 'as' => 'storeProduct'));
	Route::post('/updateProduct/{id}', array('uses' => 'AdminController@updateProduct', 'as' => 'updateProduct'));

});
