<?php 

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;

/**
 * ur custom form Ajax
 */
class AjaxForm extends FormBase{

    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'ajax-form.ajaxform';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['message'] = [
            '#type' => 'markup',
            '#markup' => '<div class="result_message"></div>'
        ];
        $form['rival_1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Rival One')
        ];
        $form['rival_2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Rival Two')
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Who will wine ?'),
            '#ajax' => [
                'callback' => '::setMessage'
            ]
        ];
        return $form;
    }
    /**
     * Our ajax form
     */
    public function setMessage(array &$form, FormStateInterface $form_state){
        $winner = rand(1, 2);
        $reponse = new AjaxResponse();
        $response->addCommand(
            new HtmlCommand(
                '.result_message',
                'The winner is: '.$form_state->getValue('rival_'.$winner)
            )
        );
        //return $response;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        //drupal_set_message($form_state->getValues());
    }
    
}