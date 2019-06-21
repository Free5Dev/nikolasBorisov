<?php 

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Providers a block called "Example heroBlock"
 * @Block(
 * id="module_hero_hero",
 * admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase{

    /**
     * {@inheritdoc}
     */
    public function build(){
        $heros = [
            ['name' => 'Diallo', 'surName' => 'Mama'],
            ['name' => 'Diallo', 'surName' => 'Sory'],
            ['name' => 'Soumah', 'surName' => 'Sas'],
            ['name' => 'Soumah', 'surName' => 'Free'],
            ['name' => 'Soumah', 'surName' => 'Lylex'],
            ['name' => 'Soumah', 'surName' => 'Boubex']

        ];
        $table = [
            '#type' => 'table',
            '#header' => [
                $this->t('Name'),
                $this->t('Sur Name')
            ] 
        ];
        foreach($heros as $hero){
            $table [] = [
                'name' =>[
                    '#type' => 'markup',
                    '#markup' => $hero['name']
                ],
                'surName' =>[
                    '#type' => 'markup',
                    '#markup' => $hero['surName']
                ]
                ];
        }
        return $table;
        return [
            '#type' => 'markup',
            '#markup' => $this->t("The output of our surperherooes block."),
        ];
    }
}