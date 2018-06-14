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
     * @ORM\ManyToMany(targetEntity="Student")
     * @ORM\JoinTable(name="students_marks",
     *      joinColumns={@ORM\JoinColumn(name="mark_id", referencedColumnName="id")}
     * )
     */
    private $studentId;

    /**
     * @ORM\ManyToMany(targetEntity="Classes")
     * @ORM\JoinTable(name="classes_marks",
     *      joinColumns={@ORM\JoinColumn(name="mark_id", referencedColumnName="id")}
     * )
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
     * Add studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     *
     * @return Mark
     */
    public function addStudentId(\AppBundle\Entity\Student $studentId)
    {
        $this->studentId[] = $studentId;

        return $this;
    }

    /**
     * Remove studentId
     *
     * @param \AppBundle\Entity\Student $studentId
     */
    public function removeStudentId(\AppBundle\Entity\Student $studentId)
    {
        $this->studentId->removeElement($studentId);
    }

    /**
     * Get studentId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Add classId
     *
     * @param \AppBundle\Entity\Classes $classId
     *
     * @return Mark
     */
    public function addClassId(\AppBundle\Entity\Classes $classId)
    {
        $this->classId[] = $classId;

        return $this;
    }

    /**
     * Remove classId
     *
     * @param \AppBundle\Entity\Classes $classId
     */
    public function removeClassId(\AppBundle\Entity\Classes $classId)
    {
        $this->classId->removeElement($classId);
    }

    /**
     * Get classId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Add studentMarkId
     *
     * @param \AppBundle\Entity\Student $studentMarkId
     *
     * @return Mark
     */
    public function addStudentMarkId(\AppBundle\Entity\Student $studentMarkId)
    {
        $this->studentMarkId[] = $studentMarkId;

        return $this;
    }

    /**
     * Remove studentMarkId
     *
     * @param \AppBundle\Entity\Student $studentMarkId
     */
    public function removeStudentMarkId(\AppBundle\Entity\Student $studentMarkId)
    {
        $this->studentMarkId->removeElement($studentMarkId);
    }

    /**
     * Get studentMarkId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentMarkId()
    {
        return $this->studentMarkId;
    }

    /**
     * Add classMarkId
     *
     * @param \AppBundle\Entity\Classes $classMarkId
     *
     * @return Mark
     */
    public function addClassMarkId(\AppBundle\Entity\Classes $classMarkId)
    {
        $this->classMarkId[] = $classMarkId;

        return $this;
    }

    /**
     * Remove classMarkId
     *
     * @param \AppBundle\Entity\Classes $classMarkId
     */
    public function removeClassMarkId(\AppBundle\Entity\Classes $classMarkId)
    {
        $this->classMarkId->removeElement($classMarkId);
    }

    /**
     * Get classMarkId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClassMarkId()
    {
        return $this->classMarkId;
    }
}
