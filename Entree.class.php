<?php

    Class Entree extends Plat
    {
        public $choix;
       
        

        public function __construct( $choix )
        {
            $this->choix = $choix;
            
        }
    }