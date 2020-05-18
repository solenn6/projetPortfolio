<?php
    class Project {
        protected $id;
        protected $name;
        protected $picture;
        protected $description;
        protected $filter;
        protected $language;

        public function getId(){
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPicture()
        {
            return $this->picture;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getFilter()
        {
            return $this->filter;
        }

        public function getLanguage()
        {
            return $this->language;
        }

        public function setId($id){
            $_id = (int) $id;
            if ($id > 0)
            {
                $this->id = $id;
            }
        }

        public function setName($name)
        {
            if (is_string($name))
            {
                $this->name = $name;
            }
        }

        public function setPicture($picture)
        {
            if (is_string($picture))
            {
                $this->picture=$picture;
            }
        }

        public function setDescription($description)
        {
            if (is_string($description))
            {
                $this->description = $description;
            }
        }

        public function setFilter($filter)
        {
            if (is_string($filter))
            {
                $this->filter = $filter;
            }
        }

        public function setLanguage($language)
        {
            if (is_string($language))
            {
                $this->language = $language;
            }
        }

    }