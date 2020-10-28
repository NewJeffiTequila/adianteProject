<?php
    class TemplateViewWindow extends TWindow
    {
        public function __construct()
        {
            parent::__construct();
            parent::setSize(0.6, null);

            parent::removeTitleBar();
            parent::disableEscape();
            parent::removePadding();

            $html = new THtmlRenderer('app/resources/template_janela_simples.html');

            $replaces = [];
            $replaces['title'] = 'Titulo';
            $replaces['body'] = 'Conteudo';
            $replaces['footer'] = 'Footer';

            $html->enableSection('main', $replaces);

            // $vbox->add($html);

            parent::add($html);
        }
    }