<?php

use Illuminate\Support\Facades\Session;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('index');
	}

	public function contact()
	{
		return View::make('contact');
	}

	## Login
	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$input = Input::all();

		$rules = array('email' => 'required', 'password' => 'required');

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::to('login')->withErrors($validation->messages());
		} else {
			$credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));

			if(Auth::attempt($credentials))
			{
				return Redirect::route('AdminIndex');
			} else {
				return Redirect::to('login');
			}
		}
	}

	## Register
	public function getRegister()
	{
		return View::make('register');
	}

	public function postRegister()
	{
		$input = Input::all();

		$rules = array('username' => 'required|unique:users', 'email' => 'required|unique:users|email', 'password' => 'required');

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::to('register')->withInput()->withErrors($validation->messages());
		}

		$password = Input::get('password');
		$password = Hash::make($password);

		$user = new User;

		$user->username = Input::get('username');

		$user->email = Input::get('email');
		$user->password = $password;

		$user->save();

		return Redirect::to('login');
	}

	## Logout
	public function logout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('login');
	}

	## Categories
	public function getCategory($id)
	{
		$categories = Category::all();
			$products = Product::where('category_id', '=', $id)->get();

			return View::make('category',compact('categories'))->withProducts($products)->withCurrent($id);
	}

}
