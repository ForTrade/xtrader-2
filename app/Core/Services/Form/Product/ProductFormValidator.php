<?php namespace Core\Services\Form\Product;

use Core\Services\Validation\AbstractValidator;

class ProductFormValidator extends AbstractValidator {

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = array(
        'title' => 'required',
        'user_id' => 'required|exists:users,id', 
        'status_id' => 'required|exists:statuses,id',
        'excerpt' => 'required',
        'content' => 'required',
        'tags' => 'required',
    );

}