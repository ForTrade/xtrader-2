<?php
/**
 * 
 */
class Photo extends Eloquent {

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
    public function product()
    {
        return $this->belongsTo('Product');
    }
    

}
