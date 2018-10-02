<?php

    Class Dessert extends Plat
    {
        public $parfum;
       
        

        public function __construct( $parfum )
        {
            $this->parfum = $parfum;
            
        }
    }