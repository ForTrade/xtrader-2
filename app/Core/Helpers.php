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
    
    public static function getProductImage($filename, $id, $size='sm')
    {
        $basepath = \Config::get('products.img_base_path');
        $url = link_to($basepath . '/' . $id .'/'. $size . '/' . $filename);
        
        return $url;
    }
    
}

?>
