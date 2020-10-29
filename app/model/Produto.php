<?php
    class Produto extends TRecord
    {
        const TABLENAME = 'produto';
        const PRIMARYKEY = 'id';
        const IDPOLICY = 'max';

        public function __constructor($id=null, $callObjectLoad = true)
        {
            parent::__constructor($id, $callObjectLoad);

            parent::addAttribute('descricao');
            parent::addAttribute('estoque');
            parent::addAttribute('preco_venda');
            parent::addAttribute('unidade');
            parent::addAttribute('local_foto');
        }

    }