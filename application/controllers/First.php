<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of File
 *
 * @author spero
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->first();
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
    function zzz(){
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get(1);
        $this->data = array_merge($this->data, $text);
        $this->render();    
    }
    
    function gimme($param){
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get($param);
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
}