<?php

namespace App;

class Seller extends User
{
    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
