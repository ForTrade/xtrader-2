<?php namespace Core\Services\Form\Product;

use Core\Services\Validation\ValidableInterface;
use Core\Repos\Product\ProductRepository;

class ProductForm {

    /**
     * Form Data
     *
     * @var array
     */
    protected $data;

    /**
     * Validator
     *
     * @var Core\Services\Validation\ValidableInterface;
     */
    protected $validator;

    /**
     * Product repository
     * 
     * @var Core\Repos\Product\ProductRepository 
     */
    protected $product;

    /**
     * Construct
     * 
     * @param ValidableInterface $validator
     * @param ProductRepository $product 
     */
    public function __construct(ValidableInterface $validator, ProductRepository $product)
    {
        $this->validator = $validator;
        $this->product = $product;
    }

    /**
     * Create an new product
     *
     * @return boolean
     */
    public function save(array $input)
    {
        if( ! $this->valid($input) )
        {
            return false;
        }

        return $this->product->create($input);
    }

    /**
     * Update an existing product
     *
     * @return boolean
     */
    public function update(array $input)
    {
        if( ! $this->valid($input) )
        {
            return false;
        }

        return $this->product->update($input);
    }

    /**
     * Return any validation errors
     *
     * @return array
     */
    public function errors()
    {
        return $this->validator->errors();
    }

    /**
     * Test if form validator passes
     *
     * @return boolean
     */
    protected function valid(array $input)
    {
        return $this->validator->with($input)->passes();
    }


}