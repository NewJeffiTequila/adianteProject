<?php
    class Cliente extends TRecord
    {
        const TABLENAME = 'cliente';
        const PRIMARYKEY = 'id';
        const IDPOLICY = 'max';

        const CREATEDAT = 'created_at';
        const UPDATEDAT = 'updated_at';
    

        public function __constructor($id=null, $callObjectLoad = true)
        {
            parent::__constructor($id, $callObjectLoad);

            parent::addAttribute('categoria_id');
            parent::addAttribute('cidade_id');
            parent::addAttribute('email');
            parent::addAttribute('endereco');
            parent::addAttribute('genero');
            parent::addAttribute('nascimento');
            parent::addAttribute('nome');
            parent::addAttribute('situacao');
            parent::addAttribute('telefone');
            parent::addAttribute('created_at');
            parent::addAttribute('updated_at');
        }
        public function get_categoria()
        {
            if (empty($this->categoria)) {
                $this->categoria = new Categoria($this->categoria_id);
            }
            return $this->categoria;
        }
        public function get_cidade()
        {
            if (empty($this->cidade)) {
                $this->cidade = new Cidade($this->cidade_id);
            }
            return $this->cidade;
        }

    }