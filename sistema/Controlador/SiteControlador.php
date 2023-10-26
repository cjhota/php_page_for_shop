<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;

class SiteControlador extends Controlador {
    
    public function __contruct() {
        parent::__contruct('templates/site/views');
    }
    
    public function index(): void {
        echo $this->template->renderizar('index.html', [
            'titulo' => 'test',
            'subtitulo' => 'lorem i dsdsdsdsdsdsdsdsd'
        ]);
    }
}
