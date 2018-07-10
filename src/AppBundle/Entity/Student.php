<?php
namespace AppBundle\Entity;

use AppBundle\Service\AverageMarkCalculator;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name = "student")
 */
class Student
{
    /**
     * @ORM\Column(type = "integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO") 
     */
    private $id;

    /**
     * @ORM\Column(type = "boolean", nullable=false, options={"default":"1"}, name="active")
     * Doesn't do anything, just for testing.
     */
    private $active = 1;

    /**
     * @ORM\Column(type = "string", length = 50)
     * @Assert\NotBlank(message="Wpisz imię.")
     */
    private $name;

    /**
     * @ORM\Column(type = "text")
     * @Assert\NotBlank(message="Podaj adres.")
     */
    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="Classes", inversedBy="students")
     * @ORM\JoinTable(name="classes")
     */
    private $classes;
    /**
     * @ORM\OneToMany(targetEntity="Mark", mappedBy="studentId")
     *
     */
    private $marks;

    public function __construct()
    {
        $this->marks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->active = 1;
    }

    public function checkIfAttendsClass(Classes $class): bool
    {
        $classesOfStudent = $this->getClasses();
        for ($i = 0; $i < count($classesOfStudent); $i++) {
            if ($class->getId() == $classesOfStudent[$i]->getId()) {
                return true;
            }
        }
        return false;
    }

    public function checkIfHasMarksInClass(Classes $class): bool
    {
        if(count($this->getMarks()) < 1 ){
            return false;
        }
            foreach ($this->getMarks() as $mark) {
                if ($mark->getClassId() == $class) {
                    return true;
                }
            } return false;
    }

    public function getStudentMarksAverageForClass(Classes $class): float
    {
        if(!$this->checkIfAttendsClass($class)){
           throw new \InvalidArgumentException("Student doesn't attend this class!");
        } else if(!$this->checkIfHasMarksInClass($class)){
            throw new \InvalidArgumentException("Student doesn't have any marks in given class.");
        } else {
            $classMarks = array();
            foreach ($this->marks as $mark){
                if($mark->getClassId()->getId() == $class->getId()){
                    $classMarks[]=$mark;
                }
            }
        }
        return AverageMarkCalculator::calculateMarkAverages($classMarks);
    }

    // This function is used for EasyAdmin virtual property
    public function getIDName(){
        return $this->getId().'-'.$this->getName();
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
     *
     * @return Student
     */
    public function setName($name)
    {
        $this->name = ucfirst($name);

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
     * Set address
     *
     * @param string $address
     *
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add class
     *
     * @param \AppBundle\Entity\Classes $class
     *
     * @return Student
     */
    public function addClass(\AppBundle\Entity\Classes $class)
    {
        $class->addStudent($this);
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Remove class
     *
     * @param \AppBundle\Entity\Classes $class
     */
    public function removeClass(\AppBundle\Entity\Classes $class)
    {
        $class->removeStudent($this);
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Get marks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMarks()
    {
        return $this->marks;
    }


    /**
     * Add mark
     *
     * @param \AppBundle\Entity\Mark $mark
     *
     * @return Student
     */
    public function addMark(\AppBundle\Entity\Mark $mark)
    {
        $this->marks[] = $mark;

        return $this;
    }

    /**
     * Remove mark
     *
     * @param \AppBundle\Entity\Mark $mark
     */
    public function removeMark(\AppBundle\Entity\Mark $mark)
    {
        $this->marks->removeElement($mark);
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Student
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
