<?php
    class TemplateViewPanelGroup extends TPage
    {
        public function __construct(){
            parent::__construct();

            $panel = new TPanelGroup('Title');

            $table = new TTable;
            $table->border = 1;
            $table->style = 'border-collapse:collapse';
            $table->width = '100%';
            $table->addRowSet('A', 'B');
            $table->addRowSet('A', 'B');

            $panel->add($table);
            $panel->addFooter('rodapé');

            parent::add($panel);

        }
    }