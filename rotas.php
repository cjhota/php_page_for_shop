<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaltNamespace('sistema\Controlador');

SimpleRouter::get('URL_SITE', 'SiteControlador@index');

SimpleRouter::start();