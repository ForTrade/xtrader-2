<?php

class Discount extends Eloquent {

    protected $guarded = array();
    public static $rules = array();
    
    public function products()
    {
        return $this->morphedByMany('Product', 'discountable');
    }

}
