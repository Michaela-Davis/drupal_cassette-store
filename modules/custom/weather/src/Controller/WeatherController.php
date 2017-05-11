<?php

namespace Drupal\weather\Controller;
use Symfony\Component\HttpFoundation\Response;

class WeatherController
{
    public function api() {
      $city = 'Missoula';
      $state = 'MT';
      $weather = 'http://api.wunderground.com/api/28eb4ab328f37f10/conditions/q/' . $state . '/' . $city . '.json';
      // $apiKey = '28eb4ab328f37f10';
      $result = file_get_contents($weather);
      $weather_array = json_decode($result, true);
      $city_and_state = $weather_array['current_observation']['display_location']['full'];
      return new response ($city_and_state);
  }
}
