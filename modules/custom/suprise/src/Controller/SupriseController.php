<?php

namespace Drupal\suprise\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupriseController
{
    public function suprise()
    {
        $nid=1;
        $viewmode = 'default';
        $entityType = 'node';
        $display = entity_get_display($entityType, 'article', $viewmode)
        ->setComponent('body', array(
        'type' => 'text_summary_or_trimmed',
        'settings' => array('trim_length' => '200'),
         'weight' => 1,
        ))
        ->removeComponent('field_image')
        ->save();
        return new Response ("hello");
        // $viewBuilder = \Drupal::entityTypeManager()->getViewBuilder($entityType);
        // var_dump($display);
        // return new Response("hello");
        // $node = \Drupal\node\Entity\Node::load(1);
        // $node = node_load((int) $nid);
        // render()$node;
        // return new Response ($node);

        // $vb = [EntityTypeManager]->getViewBuilder('node'); // Drupal\node\NodeViewBuilder
        // $nodeview = $vb->view($node, $viewmode);
        // $fieldrenderarray = $nodeview[$nid];
    }
}
