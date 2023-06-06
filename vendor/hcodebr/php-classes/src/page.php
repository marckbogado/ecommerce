<?php 

namespace Hcode;

use Rain\Tpl;

class Page{

    private $tpl;
    private $options = [];
    private $defaults = [
        "data"=>[]
    ]; //opçoes padrões, onde DATA irá armazenar os nossos dados

    public function __construct($opts = array(), $tpl_dir = "/views/") //opções da classe
    {
        //mesclando dois arrays, com o ultimo passado sobrescrevendo o outro
        $this->options = array_merge($this->defaults, $opts); //mescla as duas informações e guarda dentro do atributo OPTIONS

        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir, //caminho para encontrar o arquivo html
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
            "debug"         => false
        );
        
        Tpl::configure( $config );

        $this->tpl = new Tpl; //para ter acesso em outros métodos, usando como atributo da classe tpl
        $this->setData($this->options["data"]);
        $this->tpl->draw("header");
    }


    //MÉTODO SETDATA, PARA REUTILIZAR NO CÓDIGO
    private function setData($data = array())
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }


    //MÉTODO PARA O CONTEÚDO, CORPO DA PÁGINA
    public function setTpl($name, $data = array(), $returnHtml = false)
    {
        $this->setData($data);//passando os dados para o template
        return $this->tpl->draw($name, $returnHtml);//"desenhando" o template na tela
    }


    //MÉTODO DESTRUCT
    public function __destruct()
    {
        $this->tpl->draw("footer");
    }
}


?>