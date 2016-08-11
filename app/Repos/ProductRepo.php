<?php

namespace App\Repos;

use App\Product;

class ProductRepo
{
	public function createProduct($data)
	{
		$product = Product::create($data);

		return $product;
	}

	public function getAll()
	{
		return Product::latest()->get();
	}
}