<?php
    class Movie{
        public $name;
        public $genre;
        function __construct($name) {
        $this->name = $name;
        }

     public function render() {
        return 
        "<div class='m-btm-30 bg-lightblue'>
            <h3>Nome film:</h3>
            <span>".$this->name."</span>
            <h3>Genere:</h3>
            <span>".$this->genre."</span>
        </div>";
     }
    }