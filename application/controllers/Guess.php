<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guess
 *
 * @author spero
 */
class Guess extends Application { 
    // loads the template and uses the get method in the quotes
    // model to retrieve the fourth quote then merges the data.
    function index() {
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->get(4);
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
}
