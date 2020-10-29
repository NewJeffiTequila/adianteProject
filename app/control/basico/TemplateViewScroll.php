
<?php
    class TemplateViewScroll extends TPage
    {
        public function __construct(){
            parent::__construct();

            $scroll = new TScroll;
            $scroll->setSize( '100%','300');

            $table = new TTable;
            $scroll->add($table);
            for ($i=0; $i < 30; $i++)
            { 
                $object = new TEntry('field'. $i);
                $table->addRowSet('Field'.$i, $object);
            }

            parent::add($scroll);

        }
    }