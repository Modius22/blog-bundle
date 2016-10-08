<?php



namespace modius22\BlogBundle\Entity;



use Doctrine\ORM\Mapping as ORM;


/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="modius22\blog-bundle\Repository\ArticleRepository")
 */

class Article



{

  /**
      * @ORM\Column(type="integer")
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="AUTO")
      */

     private $id;

    /**
     * Get id
     *
     * @return integer
     */

    public function getId()
    {
        return $this->id;

    }

}
