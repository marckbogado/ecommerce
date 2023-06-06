<?php 

namespace Hcode;

class PageAdmin extends Page {

    public function __construct($opts = array(), $tpl_dir = "/views/admin/")
    {

        parent::__construct($opts, $tpl_dir);
        //chama o método contrutor da classe pai (PAGE), tpl_dir deste método contrutor
        
    }
}


?>