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
    function __construct(string $name, Theme $theme, Support $support) {
        $this->name = $name;
        $this->theme = $theme;
        $this->support = $support;
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

    // Método propio de la Clase
    function Description() {
        return "Para estudiar " . $this->theme->name . " esta semana he accedido al recurso " . $this->name . ". El formato del recurso es " . $this->support->name . ".\n";
    }
    
}

?>