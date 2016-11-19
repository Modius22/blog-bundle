<?php

namespace modius22\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="modius22\blog-bundle\Repository\TagsRepository")
 */
class Tags
{
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var name
   *
   * @ORM\Column(name="name", type="string", length=100)
   */
  private $name;

   public function getName()
   {
       return $this->name;
   }

   public function setName($name)
   {
       $this->name = $name;
   }

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
