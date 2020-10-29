<?php
    class TemplateViewNotebook extends TPage
    {
        public function __construct(){
            parent::__construct();
                
            $notebook = new TNotebook;

            $table1 = new TTable;
            $table2 = new TTable;

            $notebook->appendPage('Aba1' , $table1);
            $notebook->appendPage('Aba2' , $table2);

            $field1 = new TEntry('field1');
            $field2 = new TEntry('field2');
            $field3 = new TEntry('field3');
            $field4 = new TEntry('field4');
            $field5 = new TEntry('field5');
            $field6 = new TEntry('field6');
            $table1->addRowSet(new TLabel('campo'), $field3);
            $table1->addRowSet(new TLabel('campo'), $field2);
            $table1->addRowSet(new TLabel('campo'), $field1);

            $table2->addRowSet(new TLabel('campo'), $field4);
            $table2->addRowSet(new TLabel('campo'), $field5);
            $table2->addRowSet(new TLabel('campo'), $field6);


           

            parent::add($notebook);

        }
    }