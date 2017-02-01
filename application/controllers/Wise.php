<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function bingo() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);

        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}
