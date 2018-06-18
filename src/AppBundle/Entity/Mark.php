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
     * Set studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return Mark
     */
    public function setStudentId(\AppBundle\Entity\Student $studentId = null)
    {
        $this->studentId = $studentId;

        return $this;
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
     * Set classId
     *
     * @param \AppBundle\Entity\Classes $classId
     *
     * @return Mark
     */
    public function setClassId(\AppBundle\Entity\Classes $classId = null)
    {
        $this->classId = $classId;

        return $this;
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
