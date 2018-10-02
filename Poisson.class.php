<?php
    Class Poisson extends Plat
    {
        public $type_poisson;
       
               

        public function __construct( $type_poisson )
        {
            $this->type_poisson = $type_poisson;
            
        }
    }