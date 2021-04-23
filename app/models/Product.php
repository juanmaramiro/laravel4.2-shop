<?php

class Product extends Eloquent
{
	public static $rules = ['name' => 'required|min:3',
							'description' => 'required|max:250',
							'price' => 'required|numeric',
							'image' => 'required|image|mimes:png,jpeg,jpg'];

	public static $update_rules = ['name' => 'required|min:3',
									'description' => 'required|max:250',
									'price' => 'required|numeric',
									'image' => 'image|mimes:png,jpeg,jpg'];
}

?>