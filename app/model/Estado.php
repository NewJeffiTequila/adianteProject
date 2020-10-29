<?php
    class Estado extends TRecord
    {
        const TABLENAME = 'estado';
        const PRIMARYKEY = 'id';
        const IDPOLICY = 'max';



        public function __constructor($id=null, $callObjectLoad = true)
        {
            parent::__constructor($id, $callObjectLoad);

            parent::addAttribute('nome');
        }

    }