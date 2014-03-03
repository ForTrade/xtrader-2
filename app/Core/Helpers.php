<?php namespace Core;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helpers
 *
 * @author Test
 */
class Helpers {
    
    /**
     * Compile URL to product images
     * @param type $filename
     * @param type $id
     * @param type $size
     * @return type 
     */
    public static function getProductImage($filename, $id, $size=null)
    {
        $basepath = \Config::get('products.img_base_path');
        
        if (!$size){
            $url = url($basepath . '/' . $id . '/' . $filename);
        }else{
            $url = url($basepath . '/' . $id .'/'. $size . '/' . $filename);
        }
        
        
        return $url;
    }
    
}

?>
