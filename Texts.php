<?php
    class Texts{

        private $text_id;
        private $tittle;
        private $text;
        private $date;
        private $image_name;
    
    
        /**
         * Get the value of text_id
         */ 
        public function getText_id()
        {
            return $this->text_id;
        }
    
        /**
         * Set the value of text_id
         *
         * @return  self
         */ 
        public function setText_id($text_id)
        {
            $this->text_id = $text_id;
    
            return $this;
        }
    
        /**
         * Get the value of tittle
         */ 
        public function getTittle()
        {
            return $this->tittle;
        }
    
        /**
         * Set the value of tittle
         *
         * @return  self
         */ 
        public function setTittle($tittle)
        {
            $this->tittle = $tittle;
    
            return $this;
        }
    
        /**
         * Get the value of text
         */ 
        public function getText()
        {
            return $this->text;
        }
    
        /**
         * Set the value of text
         *
         * @return  self
         */ 
        public function setText($text)
        {
            $this->text = $text;
    
            return $this;
        }
    
        /**
         * Get the value of date
         */ 
        public function getDate()
        {
            return $this->date;
        }
    
        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
            $this->date = $date;
    
            return $this;
        }
    
        /**
         * Get the value of image_name
         */ 
        public function getImage_name()
        {
            return $this->image_name;
        }
    
        /**
         * Set the value of image_name
         *
         * @return  self
         */ 
        public function setImage_name($image_name)
        {
            $this->image_name = $image_name;
    
            return $this;
        }
    }