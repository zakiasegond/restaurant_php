<?php
  


    Class MenuEnfant extends Menu
    {
       
        public $entrée;
        public $dessert;      
        

        public function __construct($entrée, $dessert)
        {
            $this->entrée = $entrée;
            $this->dessert = $dessert;
            
        }
    }