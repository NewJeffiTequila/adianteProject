<?php
    class TemplateViewSidePage extends TPage
    {
        public function __construct()
        {
            parent::__construct();
            parent::setTargetContainer('adianti_right_panel');

            $html = new THtmlRenderer('app/resources/side_page.html');

            $replaces = [];
            $replaces['title'] = 'Titulo';
            $replaces['body'] = 'Conteudo';
            $replaces['footer'] = 'Footer';

            $html->enableSection('main', $replaces);

            // $vbox->add($html);

            parent::add($html);
        }
        public static function onClose()
        {
            TScript::create('Template.closeRightPanel()');
        }
    }