<?php 
/** 
* @file
* Contains \Drupal\my_custom\Controller\DemoController. 
*/

namespace Drupal\my_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
* DemoController
*/
class MyCustomController extends ControllerBase{
    
    protected $MyCustomService;
    /**
    * Class contructor. 
    */
    public function __construct($MyCustomService){
        $this->MyCustomService = $MyCustomService;
    }
    /**
    * {@inheritdoc}
    */
    public static function create(ContainerInterface $container){
        return new static(
            $container->get('my_custom.my_custom_service')
        );
    }
    /** 
    * Generates an example page (from demo)
    */
    public function my_custom(){
        return array(
            '#markup' => t('My Custom @value', array('@value' => $this->MyCustomService->getMyCustomValue())),
        );
    }
}