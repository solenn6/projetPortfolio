<?php
    class Competence{
        protected $id;
        protected $name;
        protected $description;
        public function getid(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getDescription(){
            return $this->description;
        }
        public function setId($id){
            $_id = (int) $id;
            if ($id > 0)
            {
                $this->id = $id;
            }
        }
        public function setName($name){
            if (is_string($name))
            {
                $this->name = $name;
            }
        }
        public function setDescription($description){
            if (is_string($description))
            {
                $this->description = $description;
            }
        }
    }