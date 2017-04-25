<?php

use Phinx\Migration\AbstractMigration;

class CreateJornadasTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table=$this->table('jornadas');
        $table->addColumn('nombre','string',array('limit' => 100))
              ->addColumn('local','string',array('limit' => 100))
              ->addColumn('visitante','string',array('limit' => 100))
              ->addColumn('fecha','date')
              ->addColumn('hora','time')
              ->addColumn('arbitro_id','integer',array('limit' => 11))
              ->addColumn('campo','string',array('limit' => 100))
              ->addColumn('acta_id','integer',array('limit' => 11))
              ->create();
    }
}
