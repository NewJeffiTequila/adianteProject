<?php
    class Cidade extends TRecord
    {
        const TABLENAME = 'cidade';
        const PRIMARYKEY = 'id';
        const IDPOLICY = 'max';



        public function __constructor($id=null, $callObjectLoad = true)
        {
            parent::__constructor($id, $callObjectLoad);

            parent::addAttribute('nome');
            parent::addAttribute('estado_id');
            
        }
        public function get_estado()
        {
            if (empty($this->estado)) {
                $this->estado = new Estado($this->estado_id);
            }
            return $this->estado;
        }

    }