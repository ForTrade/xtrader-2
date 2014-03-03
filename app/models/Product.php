<?php

/**
 * 
 */
class Product extends Eloquent {

    /**
     * Guarded fields
     * @var type 
     */
    protected $guarded = array();
    
    /**
     * Validation rules
     * @var type 
     */
    public static $rules = array();
    
    /**
     * Get discounts
     * @return type 
     */
    public function discounts()
    {
        return $this->morphToMany('Discount', 'discountable');
    }
    
    /**
     * Get category
     * @return type 
     */
    public function category()
    {
        return $this->belongsTo('Category');
    }
    
    /**
     * Get vendor
     * @return type 
     */
    public function vendor()
    {
        return $this->belongsTo('Vendor');
    }
    
    /**
     * Get attributes
     * @return type 
     */
    public function attributes()
    {
        return $this->hasMany('Attribute');
    }
    
    /**
     * Get photos
     * @return type 
     */
    public function photos()
    {
        return $this->hasMany('Photo');
    }
    

}
