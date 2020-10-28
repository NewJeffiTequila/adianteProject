<?php
    class TemplateViewMask extends TPage
    {
        public function __construct()
        {
            parent::__construct();
            try{
                $html = new THtmlRenderer('app/resources/template_mask.html');

                $replace = [];
                $replace['date'] = date('Y-m-d');
                $replace['datetime'] = date('Y-m-d H:i:s');
                $replace['number'] = (1212121.11);
                $replace['value1'] = 10;
                $replace['value2'] = 20;
                $replace['value3'] = 30;

                $html->enableSection('main' , $replace);

                parent::add($html);


            } catch (Exception $e) {
                new TMessage ('error' , $e->getMessage());
            }
        }
    }
