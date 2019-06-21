<?php 

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase ;

class HeroController extends ControllerBase {

    public function heroList(){

        $heros = [
            ['name' => 'Mama'],
            ['name' => 'Sory'],
            ['name' => 'Sas'],
            ['name' => 'Free'],
            ['name' => 'Lylex'],
            ['name' => 'Boubex'],
        ];
        
        return [
            // '#type' => 'markup',
            // '#markup' => $this->t('Controller title in markup')
            "#theme" => 'hero_list',
            "#items" => $heros,
            "#title" => $this->t('Title Controller in Templates Twig')
            
        ];
    }
}