<?php

namespace Drupal\newsletter\Controller;
use Symfony\Component\HttpFoundation\Response;

class NewsletterController
{
    public function newsletter()
    {
        return new Response ('hello');
    }
}
