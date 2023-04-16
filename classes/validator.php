<?php
abstract class Validator {
    protected $validatorName;

    public function __construct($validatorName) {
         $this->validatorName = $validatorName;
     }
    abstract public function validate($input);
     public function getValidatorName() {
         return $this->validatorName;
     } 
 }

    
 class skuValidator extends Validator {

     public function __construct() {
         parent::__construct('sku');
     }

   public function validate($input) {
     if (!preg_match('/^[A-Za-z0-9]+$/', $input)) {
       throw new Exception("Invalid SKU: $input");
     }
   }
 }

 class nameValidator extends Validator {

     public function __construct() {
         parent::__construct('name');
     }

   public function validate($input) {
     if (!is_string($input)) {
       throw new Exception("Name cannot be empty");
     }
    //   Additional validation logic for names
   }
 }

 class priceValidator extends Validator {

     public function __construct() {
         parent::__construct('price');
     }

   public function validate($input) {
     if (!is_numeric($input)) {
       throw new Exception("Invalid price: not a number");
     }
    //   Additional validation logic for prices
   }
 }

 class sizeValidator extends Validator {

     public function __construct() {
         parent::__construct('size');
     }

   public function validate($input) {
     if (!is_numeric($input)) {
       throw new Exception("Please, provide size");
     }
    //   Additional validation logic for sizes
   }
 }

 class heightValidator extends Validator {

     public function __construct() {
         parent::__construct('height');
     }

     public function validate($input) {
         if (!is_numeric($input)) {
           throw new Exception("Please, provide in dimensions");
         }
       }
 }

 class widthValidator extends Validator {

     public function __construct() {
         parent::__construct('width');
     }

     public function validate($input) {
         if (!is_numeric($input)) {
           throw new Exception("Please, provide in dimensions");
         }
       }


  }

 class lengthValidator extends Validator {

     public function __construct() {
         parent::__construct('length');
     }

     public function validate($input) {
         if (!is_numeric($input)) {
           throw new Exception("Please, provide in dimensions");
         }
       }

 }

 class weightValidator extends Validator {

     public function __construct() {
         parent::__construct('weight');
     }

   public function validate($input) {
     if (!is_numeric($input)) {
       throw new Exception("Please, provide weight");
     }
   }
 }

