<?php
    Class Viande extends Plat
    {
        public $cuisson;
        

        public function __construct( $cuisson )
        {
            $this->cuisson = $cuisson;
            
        }
    }