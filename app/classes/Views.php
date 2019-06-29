<?php

namespace App;
use Rain\Tpl;

class Views {

    private $tpl;
    private $options = [];
    private $defaults = [
        "header"=>true,
        "footer"=>true,
        "data"=>[]
    ];

    public function __construct($opts = array(), $tpl_dir = "/views/"){

        $this->options = array_merge($this->defaults, $opts);
        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir,
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/cache/",
            "debug"         => false
        );

        Tpl::configure( $config );
        $this->tpl = new Tpl();
        if ($this->options['data']) $this->setData($this->options['data']);
        if ($this->options['header'] === true) $this->tpl->draw("header", false);

    }

    public function __destruct(){
        if ($this->options['footer'] === true) $this->tpl->draw("footer", false);
    }

    private function setData($data = array()){

        foreach($data as $key => $val) {
            $this->tpl->assign($key, $val);
        }
    }

    public function setView($viewname, $data = array(), $returnHTML = false){

        $this->setData($data);
        return $this->tpl->draw($viewname, $returnHTML);

    }
}

?>