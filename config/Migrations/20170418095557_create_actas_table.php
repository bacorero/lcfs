<?php

use Phinx\Migration\AbstractMigration;

class CreateActasTable extends AbstractMigration
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
        $table=$this->table('actas');
        $table->addColumn('goles_local','integer',array('limit' => 11))
              ->addColumn('goles_visitante','integer',array('limit' => 11))
              ->addColumn('t_amarillas','integer',array('limit' => 11))
              ->addColumn('t_rojas','integer',array('limit' => 11))
              ->addColumn('incidencias','string')
              ->addColumn('campo','string',array('limit' => 100))
              ->addColumn('localidad','string',array('limit' => 100))
              ->create();
    }
}
