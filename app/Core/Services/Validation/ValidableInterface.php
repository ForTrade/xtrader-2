<?php namespace Core\Services\Validation;

interface ValidableInterface {

    /**
     * Set data to validate
     * 
     * @param array $data
     * @return \Core\Services\Validation\AbstractValidator 
     */
    public function with(array $input);

    /**
     * Check if data is validated
     * 
     * @return boolean 
     */
    public function passes();

    /**
     * Return errors (if any)
     * 
     * @return array 
     */
    public function errors();
}