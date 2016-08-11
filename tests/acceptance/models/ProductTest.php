<?php

use App\Repos\ProductRepo;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
	use DatabaseTransactions;

	/** @test */
    public function when_a_product_is_created_unique_slug_is_generated()
    {
        $product1 = new ProductRepo;

        $product1->createProduct(factory(App\Product::class)->create([
        	'title' => 'My New Product'
        ])->toArray());

        $product2 = new ProductRepo;

        $product2->createProduct(factory(App\Product::class)->create([
        	'title' => 'My New Product'
        ])->toArray());

        $this->seeInDatabase('products', ['title'=>'My New Product','slug'=>'my-new-product']);
        $this->seeInDatabase('products', ['title'=>'My New Product','slug'=>'my-new-product-2']);
    }

}
