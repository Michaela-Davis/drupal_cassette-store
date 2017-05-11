<?php

/**
 * @file
 *
 * Contains \Drupal\test_example\Tests\TestExampleUserTest.
 */

namespace Drupal\test_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Check if our user field works.
 *
 * @group test_example
 */
class TestExampleUserTest extends WebTestBase {

  /**
   * @var \Drupal\user\Entity\User.
   */
  protected $user;

  /**
   * Enabled modules
   */
  public static $modules = ['test_example'];

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
  public function testUserHasTestStatusField() {
    $this->assertTrue(in_array('test_status', array_keys($this->user->getFieldDefinitions())));
  }

}
