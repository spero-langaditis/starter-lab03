<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author spero
 */
class Welcome extends Application {
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $text = $this->quotes->last();
        $this->data = array_merge($this->data, $text);
        $this->render();
    }
    
}
