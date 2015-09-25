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
    // loads the template and uses the first method in the quotes
    // model to retrieve the first quote then merges the data.
    function index() {
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->first();
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
    // loads the template and uses the get method in the quotes
    // model to retrieve the first quote then merges the data.
    function zzz(){
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get(1);
        $this->data = array_merge($this->data, $text);
        $this->render();    
    }
    // loads the template and uses the get method in the quotes
    // model to retrieve the quote based on the parameter passed
    // to the function. In this example its the third quote
    function gimme($param){
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get($param);
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
}