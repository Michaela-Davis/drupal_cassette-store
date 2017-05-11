<?php

/**
 * @file
 *
 * Contains \Drupal\test_example\Tests\TestExampleUserTest.
 */

namespace Drupal\newsletter\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Check if our user field works.
 *
 * @group test_example
 */
class NewsletterUserTest extends WebTestBase {

  /**
   * @var \Drupal\user\Entity\User.
   */
  protected $user;

  /**
   * Enabled modules
   */
  public static $modules = ['newsletter'];

  /**
   * {@inheritdoc}
   */
  function setUp() {
    parent::setUp();

    $this->user = $this->drupalCreateUser();
  }

  /**
   * Test that the user has a test_status field.
   */
  public function testUserHasNameField() {
    $this->assertTrue(in_array('name', array_keys($this->user->getFieldDefinitions())));
  }

}
