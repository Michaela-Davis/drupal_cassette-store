<?php

namespace Drupal\suprise\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupriseController
{
    public function suprise()
    {  $nid=1;
        // $node = \Drupal\node\Entity\Node::load(1);
        $node = node_load((int) $nid);
        return new Response ($node);
    }
}
