<?php
    class TemplateViewBasico extends TPage
    {
        public function __construct()
        {
            parent::__construct();
            try {
                $html = new THtmlRenderer('app/resources/template_basico.html');

                $data = new stdClass;
                $data->id = 1;
                $data->name = 'vitor';
                // $data->name2 = 'Vitão';
                $data->adress = 'Rua limão';

                $replaces = [];
                $replaces['name'] = $data->name;
                $replaces['id'] = $data->id;
                $replaces['adress'] = $data->adress;
                $html->enableSection('main' , $replaces);

                $replacesNew = [];
                $replacesNew['name2'] = 'Nome';
                $html->enableSection('new' , $replacesNew);
                parent::add($html);
            } catch (Exception $e) {
                new TMessage ('error' , $e->getMessage());
            }
        }
    }
