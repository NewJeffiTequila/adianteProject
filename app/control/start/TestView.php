<?php
class TestView extends TPage 
{
    public function __construct()
    {
        parent::__construct();
        echo 'safe<br>';
    }
    public function onEvento(){

        echo 'evento<br>';

    }
    public function show(){
        parent::show();
        echo 'show<br>';
        echo 'show<br>';
        echo 'show<br>';

    }
}
