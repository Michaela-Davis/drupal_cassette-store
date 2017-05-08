<?php

namespace Drupal\cassette\Controller;
use Symfony\Component\HttpFoundation\Response;

class CassetteController
{
    public function cassette()
    {
        return new Response ('hello');
    }
}
