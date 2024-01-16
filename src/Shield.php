<?php

class Shield {

    public function __construct(
        private int $protection = 10,
        private string $image = 'shield.svg'
    ) {}


        /**
         * Get the value of protection
         */ 
        public function getProtection() : int
        {
                return $this->protection;
        }

        /**
         * Set the value of protection
         *
         * @return  self
         */ 
        public function setProtection($protection)
        {
                $this->protection = $protection;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage() : string
        {
            $path = "assets/images/";
                return $path.$this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }
}