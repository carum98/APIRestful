<?php

namespace App;

use App\Products;
use App\Scopes\SellerScope;

class Seller extends User
{
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
