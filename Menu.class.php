<?php
    Class Menu
    {
        public $standard;
        public $vegetarien;
		public $enfant;        
        

        public function __construct( $standard, $vegetarien, $enfant )
        {
            $this->standard = $standard;
            $this->vegetarien = $vegetarien;
            $this->enfant = $enfant;
            
        }
    }