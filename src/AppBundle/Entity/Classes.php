<?php  
namespace AppBundle\Entity;  

use Doctrine\ORM\Mapping as ORM;  
use Symfony\Component\Validator\Constraints as Assert;
/** 
   * @ORM\Entity 
   * @ORM\Table(name = "Classess") 
*/ 
class Classes { 
   /** 
      * @ORM\Column(type = "integer") 
      * @ORM\Id 
      * @ORM\GeneratedValue(strategy = "AUTO") 
   */ 
   private $id;  
    
   /** 
      * @ORM\Column(type = "string", length = 50) 
      * @Assert\NotBlank(message="Wpisz nazwę zajęć.") 
   */ 
   private $name;  
   
  /**
     * @ManyToMany(targetEntity="Student", mappedBy="classes")
     */
   private $students; 

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
     * @return Classes
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
     * Set students
     *
     * @param string $students
     *
     * @return Classes
     */
    public function setStudents($students)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get students
     *
     * @return string
     */
    public function getStudents()
    {
        return $this->students;
    }
}
