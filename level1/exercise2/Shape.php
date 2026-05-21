<?php

require_once 'Area.php';

abstract class Shape implements Area {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

}
?>