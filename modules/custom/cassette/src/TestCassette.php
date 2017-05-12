<?php
/**
 * @file
 * Contains \Drupal\cassette\TestCassette.
 */
namespace Drupal\cassette;
/**
 * provide functions for leveling up.
 *
 * @package Drupal\cassette
 */
class TestCassette {
  /**
   * Check for a response
   *
   * @return int
   */
  public function findResponse() {
    if ($response != null) {
      return 200;
    } else {
      return 100;
    }
}
