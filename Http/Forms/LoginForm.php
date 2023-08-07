<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    protected $errors = [];
    protected $attributes = [];

    public function __construct($attributes){
        $this->attributes = $attributes;
        if(!Validator::email($attributes['email'])){
            $this->errors['email'] = "Please provide a valid email address";
        }

        if(! Validator::string($attributes['password'])){
            $this->errors['password'] = "Please provide a valid password.";
        }
    }

    /**
     * @throws ValidationException
     */
    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->fail() ? $instance->throw() : $instance;
    }

    public function throw(){
        ValidationException::throw($this->errors, $this->attributes);
    }

    public function fail(){
        return count($this->errors);
    }

    public function errors(){
        return $this->errors;
    }

    public function error($key, $value){
        $this->errors[$key] = $value;

        return $this;
    }
}