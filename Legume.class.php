<?php
    Class Legume extends Plat
    {
        public $saison;
      
       

        public function __construct( $saison )
        {
            $this->saison = $saison;
        }    
          
    }