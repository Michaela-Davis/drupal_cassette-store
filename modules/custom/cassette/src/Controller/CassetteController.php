<?php

namespace Drupal\cassette\Controller;

class CassetteController
{
    public function cassette()
    {
        return new Response ('hello');
    }
}
