<?php namespace Core\Services\Cache;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * http://culttt.com/2014/02/03/laravel-4-cache-service/
 */

/**
 * Description of CacheInterface
 *
 * @author luca
 */
interface CacheInterface {

    /**
     * Get
     *
     * @param string $key
     * @return mixed
     */
    public function get($key);

    /**
     * Put
     *
     * @param string $key
     * @param mixed $value
     * @param integer $minutes
     * @return mixed
     */
    public function put($key, $value, $minutes = null);

    /**
     * Has
     *
     * @param string $key
     * @return bool
     */
    public function has($key);

}