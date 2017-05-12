<?php
  namespace Drupal\cassette\Tests;
  use Drupal\Tests\UnitTestCase;
  /**
   * Unit Tests the cassette module
   * @group cassette
   */
  class CassetteTest extends UnitTestCase {
    /**
    * Modules to install.
    *
    * @var string
    */

    public static $modules = array('cassette');
    public $cassetteService;

    public function setUp(){
      $this->cassetteService = new \Drupal\cassette\TestCassette();
    }

    public function testFindResponse(){
      $response = $this->cassetteService->findResponse('hello');
      $this->assertEquals(TRUE, $response);
    }
  }
