<?php
    Class Plat
    {
        public $entrance;
        public $dish;
		public $meat;
        public $legume;
        public $fish;
        public $dessert;        
        

        public function __construct( $entrance, $dish, $meat, $legume, $fish, $dessert )
        {
            $this->entrance = $entrance;
            $this->dish = $dish;
            $this->meat = $meat;
            $this->legume = $legume;
            $this->fish = $fish;
            $this->dessert = $dessert;
        }
    }