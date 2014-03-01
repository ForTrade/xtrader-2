<?php

/**
 * 
 */
class Product extends Eloquent {

    /**
     *
     * @var type 
     */
    protected $guarded = array();
    
    /**
     *
     * @var type 
     */
    public static $rules = array();
    
    /**
     *
     * @return type 
     */
    public function discounts()
    {
        return $this->morphToMany('Discount', 'discountable');
    }
    
    /**
     *
     * @return type 
     */
    public function category()
    {
        return $this->belongsTo('Category');
    }
    
    /**
     *
     * @return type 
     */
    public function attributes()
    {
        return $this->hasMany('Attribute');
    }
    

}
