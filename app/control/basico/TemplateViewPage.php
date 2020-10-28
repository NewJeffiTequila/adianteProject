<?php
    class TemplateViewPage extends TPage
    {
        public function __construct()
        {
            parent::__construct();
            $html = new THtmlRenderer('app/resources/template_pagina_simples.html');

            $replaces = [];
            $replaces['title'] = 'Titulo';
            $replaces['body'] = 'Conteudo';
            $replaces['footer'] = 'Footer';

            $html->enableSection('main', $replaces);

            $vbox = new TVBox;
            $vbox->add( new TXMLBreadCrumb('menu.xml', __CLASS__));
            $vbox->add($html);

            parent::add($vbox);
        }
    }