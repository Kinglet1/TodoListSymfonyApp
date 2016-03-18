<?php

namespace Lucy\TodolistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TasksList
 *
 * @ORM\Table(name="TaskLists")
 * @ORM\Entity(repositoryClass="Lucy\TodolistBundle\Entity\TasksListRepository")
 */
class TasksList
{
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="taskList")
     */
    private $tasks;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     *
     */
    public function __construct() {
        $this->tasks = new ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     * @return TasksList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Add tasks
     *
     * @param \Lucy\TodolistBundle\Entity\Task $tasks
     * @return TasksList
     */
    public function addTask(\Lucy\TodolistBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \Lucy\TodolistBundle\Entity\Task $tasks
     */
    public function removeTask(\Lucy\TodolistBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Render task as a string
     * @return string
     */
    public function __toString() {
        return $this->getName();
    }
}
