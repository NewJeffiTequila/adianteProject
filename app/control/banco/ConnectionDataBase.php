<?php
    class ConnectionDataBase extends TPage
    {
        public function __construct()
        {
            parent::__construct();

            try {
                TTransaction::open('curso');
                $conn=TTransaction::get();

                
                // $results = $conn->query('SELECT nome FROM cliente ORDER BY id');

                // foreach ($results as $value) {
                //     print $value['nome'];
                // }

                $conn->query('INSERT INTO estado (id, nome) VALUES(3,"MA")');

                TTransaction::close();
            } catch (\Exception $e) {
                new TMessage('error', $e->getMessage());
            }
        }
    }