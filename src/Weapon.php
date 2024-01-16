<?php

class Weapon {
    
    public function __construct(
        private int $damage = 10,
        private string $image = 'sword.svg'
    ) {}


        /**
         * Get the value of damage
         */ 
        public function getDamage() : int
        {
                return $this->damage;
        }

        /**
         * Set the value of damage
         *
         * @return  self
         */ 
        public function setDamage($damage)
        {
                $this->damage = $damage;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage(): string
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