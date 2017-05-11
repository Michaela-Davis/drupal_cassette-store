<?php
 /**
  * @file
  * Contains \Drupal\newsletter\Form\ContributeForm.
  */

  namespace Drupal\newsletter\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Component\Utility\UrlHelper;

  /**
 * Contribute form.
 */
  class ContributeForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'newsletter_contribute_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name'),
      '#required' => TRUE,
    );
    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => t('Email'),
      '#required' => TRUE,
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ':' . $value);
    }
  }
}
