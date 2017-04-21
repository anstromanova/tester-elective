<?php
namespace anstromanova\testerelective\models;

class ContactForm 
{
  public $name;
  public $phone;
  public $message;
  
  public function validate()
  {
    $result = false;
    
    if (!empty($this->name)) {
      $result = true;
    }
    return $result;
  }
}
