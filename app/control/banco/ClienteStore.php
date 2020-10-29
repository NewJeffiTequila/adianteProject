
<?php
    class ClienteStore extends TPage
    {
        public function __construct()
        {
            parent::__construct();

            try {
                TTransaction::open('curso');

                    $cliente = new Cliente;
                    $cliente->categoria_id = 1;
                    $cliente->cidade_id = 1;
                    $cliente->email = 'email@email.com';
                    $cliente->endereco = 'Rua';
                    $cliente->nome = 'Jose';
                    $cliente->genero = 'MA';
                    $cliente->nascimento = '1999-01-01';
                    $cliente->situacao = 'O';
                    $cliente->telefone = '999999-9999';
                    $cliente->store();

                    new TMessage('info' , 'Cliente gravado com sucesso talkey');

                TTransaction::close();
            } catch (\Exception $e) {
                new TMessage('error', $e->getMessage());
            }
        }
    }