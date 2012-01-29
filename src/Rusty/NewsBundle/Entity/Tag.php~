<?php

namespace Rusty\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rusty\NewsBundle\Entity\Tag
 */
class Tag
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var boolean $enabled
     */
    private $enabled;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    /**
     * @var Rusty\NewsBundle\Entity\Post
     */
    private $post;


    /**
     * Set post
     *
     * @param Rusty\NewsBundle\Entity\Post $post
     */
    public function setPost(\Rusty\NewsBundle\Entity\Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get post
     *
     * @return Rusty\NewsBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
    /**
     * @var Rusty\NewsBundle\Entity\Post
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add posts
     *
     * @param Rusty\NewsBundle\Entity\Post $posts
     */
    public function addPost(\Rusty\NewsBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}