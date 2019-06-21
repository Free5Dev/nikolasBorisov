<?php 

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Our Element Form
 */
class ElementForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'element_form.elementForm';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['email'] = [
            '#type' => 'email',
            '#title' => $this->t('Email'),
        ];
        $form['expiration'] = [
            '#type' => 'date',
            '#title' => $this->t('Content expiration'),
        ];
        $form['search'] = [
            '#type' => 'search',
            '#title' => $this->t('Search'),
        ];
        $form['submit'] = [
            '#type' =>'submit',
            '#value' =>$this->t('Who Will Submit Type')
        ];
        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        dsm($form_state->getValues());
    }
    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state){
        if(empty($form_state->getValue('rival_1'))){
            $form_state->setErrorByName('rival_1', $this->t('Le champs Rival One is empty'));
        }
    }
}