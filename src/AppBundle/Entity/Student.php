<?php  
namespace AppBundle\Entity;  

use Doctrine\ORM\Mapping as ORM;  
use Symfony\Component\Validator\Constraints as Assert;
/** 
   * @ORM\Entity 
   * @ORM\Table(name = "student") 
*/ 
class Student { 
   /** 
      * @ORM\Column(type = "integer") 
      * @ORM\Id 
      * @ORM\GeneratedValue(strategy = "AUTO") 
   */ 
   private $id;  
    
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

    public function __construct() {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set classes
     *
     * @param string $classes
     *
     * @return Student
     */
    public function setClasses(Classes $class)
    {
        $class->setStudents($this);
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Get classes
     *
     * @return string
     */
    public function getClasses()
    {
        return $this->classes;
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
        $this->classes->removeElement($class);
    }
}
