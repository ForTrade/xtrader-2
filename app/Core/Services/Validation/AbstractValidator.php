<?php namespace Core\Services\Validation;

use Illuminate\Validation\Factory;

/**
 * Abstract class for the validation service
 * https://github.com/fideloper/Implementing-Laravel/tree/develop/app/Impl/Service/Validation
 */
abstract class AbstractValidator implements ValidableInterface {

    /**
     * Validator
     *
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * Validation data key => value array
     *
     * @var Array
     */
    protected $data = array();

    /**
     * Validation errors
     *
     * @var Array
     */
    protected $errors = array();

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array();

    
    /**
     * Costruct
     * 
     * @param Factory $validator 
     */
    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }


    /**
     * Set data to validate
     * 
     * @param array $data
     * @return \Core\Services\Validation\AbstractValidator 
     */
    public function with(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Check if data is validated
     * 
     * @return boolean 
     */
    public function passes()
    {
        $validator = $this->validator->make($this->data, $this->rules);

        if( $validator->fails() )
        {
            $this->errors = $validator->messages();
            return false;
        }

        return true;
    }

    /**
     * Return errors (if any)
     * 
     * @return array 
     */
    public function errors()
    {
        return $this->errors;
    }

}