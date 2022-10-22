<?php

/**
 * Seo [ MODEL ]
 * Classe de apoio para o modelo LINK. Pode ser utilizada para gerar SEO para as páginas do sistema!
 * 
 * @copyright (c) 2014, Robson V. Leite UPINSIDE TECNOLOGIA
 */
class Seo {

    private $Pach;
    private $File;
    private $Link;
    private $Key;
    private $Schema;
    private $Title;
    private $Description;
    private $Image;
    private $Data;
    private $Css;
    private $Js;

    public function __construct($Pach) {
        $this->Pach = explode('/', strip_tags(trim($Pach)));
        $this->File = (!empty($this->Pach[0]) ? $this->Pach[0] : null);
        $this->Link = (!empty($this->Pach[1]) ? $this->Pach[1] : null);
        $this->Key = (!empty($this->Pach[2]) ? $this->Pach[2] : null);

        $this->setPach();
    }

    public function getSchema() {
        return $this->Schema;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getImage() {
        return $this->Image;
    }
    
    public function getData() {
        return $this->Data;
    }

    public function cssRoute() {
        return $this->Css;
    }

    public function jsRoute() {
        return $this->Js;
    }

    /*
     * ***************************************
     * **********  PRIVATE METHODS  **********
     * ***************************************
     */

    private function setPach() {
        if ($this->File == 'index'):
             //INDEX
            $this->Schema = 'WebSite';
            $this->Title = "Vídeo - " . SITE_TITLE;
            $this->Description = "Método simples, seguro e rápido para ter um cabelo liso, sem produtos caros e sem salão de beleza.";
            $this->Image = BASE . "/img/Logo.png";
            $this->Css = BASE .'/css/main.css';
            $this->Js = BASE .'/js/app.js';
            
            elseif ($this->File == 'presell'):
            //PRESSEL
            $this->Schema = 'WebSite';
            $this->Title = SITE_NAME . " - " . SITE_TITLE;
            $this->Description = "sasds";
            $this->Image = BASE . "/img/Logo.png";
            $this->Css = BASE .'/css/'. $this->File . ".css";
            $this->Js = BASE .'/js/'. $this->File . ".js";
        else:
            //404
            $this->set404();
        endif;   
    }

    private function set404() {
        $this->Schema = 'WebSite';
        $this->Title = "Oppsss, nada encontrado! - " . SITE_NAME;
        $this->Description = SITE_DESC;
        $this->Image = INCLUDE_PATH . '/img/garantia.jpeg';
        $this->Css = BASE .'/css/main.css';
    }

}
