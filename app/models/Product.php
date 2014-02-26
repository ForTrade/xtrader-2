<?php

class Product extends Eloquent {

    protected $guarded = array();
    public static $rules = array();
    
    public function discounts()
    {
        return $this->morphToMany('Discount', 'discountable');
    }
    

}
