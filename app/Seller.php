<?php

namespace App;

use App\Products;
use App\Scopes\SellerScope;
use App\Transformers\SellerTransformer;

class Seller extends User
{
    public $transformer = SellerTransformer::class;
    
    protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new SellerScope);
    }

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
