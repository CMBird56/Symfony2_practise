<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Person
 * @ORM\Entity()
 * @ORM\Table(name="person")
 */
class Person
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */

    protected $name;

    /**
     * @ORM\Column(type="integer")
     */

    protected $age;

    /**
     * @ORM\Column(type="string", length=255)
     */

    protected $favFootballTeam;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFavFootballTeam()
    {
        return $this->favFootballTeam;
    }

    /**
     * @param mixed $favFootballTeam
     */
    public function setFavFootballTeam($favFootballTeam)
    {
        $this->favFootballTeam = $favFootballTeam;
        return $this;
    }




}