<?php

namespace Drupal\cassette\Controller;
use Symfony\Component\HttpFoundation\Response;

class CassetteController
{
    public function cassette()
    {   $response = 'hello';
        return new Response ($response);
    }
}
