<?php

namespace App\Providers;

use App\Product;
use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::saving(function ($product) {
            $title = $product->title;
            $proposed_slug = strtolower(str_replace(' ', '-', $title));

            $existing_slug = Product::where('slug', $proposed_slug)->where('id', '<>', $product->id)->first();

            if(! $existing_slug) {
                $product->slug = $proposed_slug;
            } else {
                $number_added_to_proposed_slug = 0;
                do {
                    $number_added_to_proposed_slug += 1;
                    $numbered_proposed_slug = $proposed_slug . '-' . $number_added_to_proposed_slug;
                    $existing_slug = Product::where('slug', $numbered_proposed_slug)->Where('id', '<>', $product->id)->first();
                } while ($existing_slug);
                $product->slug = $numbered_proposed_slug;
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
