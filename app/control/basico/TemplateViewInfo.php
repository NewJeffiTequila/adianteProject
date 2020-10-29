<?php
    class TemplateViewInfo extends TPage
    {
        public function __construct(){
            parent::__construct();
                new TMessage('info' , 'mensagem a ser escrita');
        }
    }