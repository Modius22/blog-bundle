<?php

namespace modius22\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
  /**
   * @Route("/", name="blog_index")
   * @Template()
   */
    public function indexAction()
    {

      $em = $this->getDoctrine()->getManager();
      $repo = $em->getRepository('BlogBundle:Article');
      $article = $repo->findAll();

      return array('article' => $article);
    }
}
