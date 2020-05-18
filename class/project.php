<?php
    class Project {
        protected $name;
        protected $picture;
        protected $description;
        protected $filter;
        protected $language;

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
                $this->name = $picture;
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