<?php
  


    Class Menu
    {
        public $menu;
        public $entrée;
        public $plat1; 
        public $plat2;
        public $dessert;
        public $tempPrépa;
        public $prix;       
        

        public function __construct( $menu, $entrée, $plat1, $plat2, $dessert, $tempPrépa, $prix )
        {
            $this->menu = $menu;
            $this->entrée = $entrée;
            $this->plat1 = $plat1;
            $this->plat2 = $plat2;
            $this->dessert = $dessert;
            $this->tempPrépa = $tempPrépa;
            $this->prix = $prix;
            
        }
    }