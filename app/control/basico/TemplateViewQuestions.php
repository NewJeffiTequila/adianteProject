<?php
    class TemplateViewQuestions extends TPage
    {
        public function __construct(){
            parent::__construct();

            $action1 = new TAction([$this , 'action01']);
            $action1->setParameter('nome' , 'Parametro do action 1');

            $action2 = new TAction([$this , 'action02']);
            $action2->setParameter('nome' , 'Parametro do action 2');

            new TQuestion('executar ação' , $action1 , $action2);


        }
        public static function action01($param)
        {
            new TMessage('info' , 'Sim'\.$param['nome']);
        }
        public static function action02($param)
        {
            new TMessage('Danger' , 'Não'.$param['nome']);

        }
    }