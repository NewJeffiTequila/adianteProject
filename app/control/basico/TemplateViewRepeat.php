<?php
    class TemplateViewRepeat extends TPage
    {
        public function __construct()
        {
            parent::__construct();
            try{
                $html = new THtmlRenderer('app/resources/template_repeat.html');

                $data = [];
                $data[] = [ 'id' => 1,
                            'nome' => 'Peter', 
                            'endereco' => 'Rua1'
                        ];
                $data[] = ['id' => 2, 'nome' => 'Peti' , 'endereco' => 'Rua2'];
                $data[] = ['id' => 3 , 'nome' => 'Petier' , 'endereco' => 'Rua3'];
                // $data[] = ['id' => 4 , 'nome' => 'Petu' , 'endereco' => 'Rua4'];

                $html->enableSection('main' , []);
                $html->enableSection('details', $data = true);
                
                parent::add($html);



            } catch (Exception $e) {
                new TMessage ('error' , $e->getMessage());
            }
        }
    }
