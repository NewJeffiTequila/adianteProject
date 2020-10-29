
<?php
    class EstadoStore extends TPage
    {
        public function __construct()
        {
            parent::__construct();

            try {
                TTransaction::open('curso');

                    $estado = new Estado;
                    $estado->nome = 'AM';
                    $estado->store();

                    new TMessage('info' , 'Produto gravado com sucesso talkey');

                TTransaction::close();
            } catch (\Exception $e) {
                new TMessage('error', $e->getMessage());
            }
        }
    }