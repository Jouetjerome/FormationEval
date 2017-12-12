<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoursesRepository")
 */
class Courses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Formations", type="string", length=50)
     */
    private $formations;

    /**
     * @ORM\ManyToMany(targetEntity="Modules")
     * @ORM\JoinTable(name="course_module",
     *      joinColumns={@ORM\JoinColumn
     * (name="Courses_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn
     * (name="Modules_id", referencedColumnName="id")}
     *  )
     */

    private $modules;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=30, unique=true)
     */

    private $slug;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set formations
     *
     * @param string $formations
     *
     * @return Courses
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * Get formations
     *
     * @return string
     */
    public function getFormations()
    {
        return $this->formations;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add module
     *
     * @param \AppBundle\Entity\Modules $module
     *
     * @return Courses
     */
    public function addModule(\AppBundle\Entity\Modules $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \AppBundle\Entity\Modules $module
     */
    public function removeModule(\AppBundle\Entity\Modules $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Courses
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
