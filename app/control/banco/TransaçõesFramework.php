<?php
    class TransaçõesFramework extends TPage
    {
        public function __construct()
        {
            parent::__construct();

            try {
                TTransaction::open('curso');
                // var_dump(TTransaction::getDatabase());
                // var_dump(TTransaction::getDatabaseInfo());

                $conn=TTransaction::get();

                $statement = $conn->prepare('SELECT nome FROM cliente WHERE id >= ? AND id <= ?');
                $statement->execute([3 , 10]);
                $results = $statement->fetchAll();

          foreach ($results as $value) {
                    print $value['nome'].'<br><br>';
                }

                TTransaction::close();
            } catch (\Exception $e) {
                new TMessage('error', $e->getMessage());
            }
        }
    }