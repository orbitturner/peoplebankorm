<?php
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    /**
     * @ORM\Entity @ORM\Table(name="roles")
     **/
    class Roles
    {
        /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
        private $id;
        /** @ORM\Column(type="string") **/        
        private $nom;
        /**
         * Many Roles have Many Users.
         * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
         */
        private $users;

        
        //==============[ CONSTRUCTOR ]==============
        public function __construct()
        {
            // parent::__construct();
            //Do your magic here
            $this->users = new ArrayCollection();
        }
        

        //==============[GETTERS & SETTERS]==============
        public function getId(){
            return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;
        }
        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom)
        {
                $this->nom = $nom;
        }
        public function getUsers()
        {
                return $this->users;
        }
        public function setUsers($users)
        {
                $this->users = $users;
        }
        //==============!\ END GETTERS & SETTERS \!==============

    }

?>