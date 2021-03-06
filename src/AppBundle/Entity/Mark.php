<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name = "marks")
 */
class Mark
{
    /**
     * @ORM\Column(type = "integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type = "smallint")
     * @Assert\Range(
     *      min=1,
     *      max=6
     * )
     */
    private $markValue;

    /**
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="marks")
     */
    private $studentId;

    /**
     * @ORM\ManyToOne(targetEntity="Classes", inversedBy="marks")
     */
    private $classId;

    public function __construct()
    {
        $this->studentId = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classId = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set markValue
     *
     * @param integer $markValue
     *
     * @return Mark
     */
    public function setMarkValue($markValue)
    {
        if(!isset($markValue)){
            throw new \InvalidArgumentException ('No value given.');
        } else if(!is_int($markValue)){
            throw new \InvalidArgumentException ('Value given is not of type int.');
        } else if($markValue < 1 || $markValue > 6) {
            throw new \InvalidArgumentException ('Given mark value is invalid (has to be 1-6).');
        }
        $this->markValue = $markValue;

        return $this;
    }

    /**
     * Get markValue
     *
     * @return integer
     */
    public function getMarkValue()
    {
        return $this->markValue;
    }

    /**
     * Get studentId
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudentId()
    {
        return $this->studentId;
    }


    /**
     * Get classId
     *
     * @return \AppBundle\Entity\Classes
     */
    public function getClassId()
    {
        return $this->classId;
    }
}
