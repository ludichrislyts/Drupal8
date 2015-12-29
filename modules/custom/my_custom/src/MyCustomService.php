<?php
/**
 * @file
 * Contains Drupal\my_custom\MyCustomService.
 */
namespace Drupal\my_custom;
class MyCustomService {
  
  protected $my_custom_value;
  
  public function __construct() {
    $this->my_custom_value = 'Yeah Yeah Go Go';
  }
  
  public function getMyCustomValue() {
    return $this->my_custom_value;
  }
  
}