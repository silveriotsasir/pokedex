<?php 
    class Pokemon {
        private $id;
        private $name;
        private $height;
        private $weight;
        private $base_experience;

        function __construct ($id, $name, $height, $weight, $base_experience){
            $this->id = $id;
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            $this->base_experience = $base_experience;
        }

        public function getBase_experience()
        {
                return $this->base_experience;
        }

        public function setBase_experience($base_experience)
        {
                $this->base_experience = $base_experience;
        }

        public function getWeight()
        {
                return $this->weight;
        }

        public function setWeight($weight)
        {
                $this->weight = $weight;
        }

        public function getHeight()
        {
                return $this->height;
        }

        public function setHeight($height)
        {
                $this->height = $height; 
        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;  
        }
    }

?>
