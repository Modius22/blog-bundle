<?php

namespace modius22\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
      //var_dump($article);
      //exit;
      return array('article' => $article);
    }
}
