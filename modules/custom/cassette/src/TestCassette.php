<?php
/**
 * @file
 * Contains \Drupal\cassette\TestCassette.
 */
namespace Drupal\cassette;
/**
 * provide function for greeting.
 *
 * @package Drupal\cassette
 */
class TestCassette {
  /**
   * Check for a response
   *
   * @param $response
   * @return string
   */
  public function findResponse($response) {
    if ($response === "hello") {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
