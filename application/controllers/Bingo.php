<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author spero
 */
class Bingo extends Application {
    // loads the template and uses the get method in the quotes
    // model to retrieve the fifth quote then merges the data.
    function index() {
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get(5);
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
    // loads the template and uses the get method in the quotes
    // model to retrieve the 6th quote then merges the data.
    function wisdom(){
         $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get(6);
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
}
