<?php
    Class Plat
    {
        public $entrée;
        public $plat;
		public $viande;
        public $légume;
        // public $poisson;
        public $dessert;
        public $tempPrépa;
        public $prix;        
        

        public function __construct( $entrée, $plat, $viande, $légume, $dessert, $tempPrépa,  $prix )
        {
            $this->entrée = $entrée;
            $this->plat = $plat;
            $this->viande = $viande;
            $this->légume = $légume;
            // $this->poisson = $poisson;
            $this->dessert = $dessert;
            $this->tempPrépa = $tempPrépa;
            $this->prix =  $prix;
        }
    }