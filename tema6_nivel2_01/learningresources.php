<?php

enum Theme {
    case PHP;
    case SQL;
    case LARAVEL;
    case HTML5;
    case CSS3;
}

enum Support {
    case PDF_documentation;
    case URL_article;
    case VIDEO_tutorial;
}

class LearningResource {
    private string $name;
    private Theme $theme;
    private Support $support;
    private string $url;
    function __construct(string $name, Theme $theme, Support $support, $url) {
        $this->name = $name;
        $this->theme = $theme;
        $this->support = $support;
        $this->url = $url;
    }

    // Getters

    function getName() {
        return $this->name;
    }

    function getTheme() {
        return $this->theme->name; // el atributo es "name", no "case" !!!
    }

    function getSupport() {
        return $this->support->name; // el atributo es "name", no "case" !!!
    }

    function getUrl() {
        return $this->url;
    }

    /* Setters

    function setName(string $name) {
        $this->name = $name;
    }
    function setTheme() {

    }
    */

    // Método propio de la Clase
    function Description() {
        return "Para estudiar " . $this->theme->name . " disponemos del recurso : " . $this->name . ".\nEl formato del recurso es " . $this->support->name . ".\nPuede acceder al recurso a través de este enlace :\n" . $this->url;
    }
    
}

?>