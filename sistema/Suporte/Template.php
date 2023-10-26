<?php

namespace sistema\Suporte;

class Template {
    private \Twig\Environment $twing;
    
    public function __construct(string $diretorio) {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twing = new \Twig\Environment($loader);
    }
    
    public function renderizar(string $view,$dados) {
        return $this->twing->render($view, $dados);
    }
}
