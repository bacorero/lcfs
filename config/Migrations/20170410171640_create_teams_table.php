<?php

use Phinx\Migration\AbstractMigration;

class CreateTeamsTable extends AbstractMigration
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
        $table=$this->table('teams');
        $table->addColumn('nombre','string',array('limit' => 100))
              ->addColumn('contacto','string',array('limit' => 100))
              ->addColumn('direccion','string',array('limit' => 100))
              ->addColumn('poblacion','text',array('limit' => 100))
              ->addColumn('telefono','string', array('limit'=>9))
              ->addColumn('photo','string')
              ->addColumn('photo_dir','string')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('categoria_id','integer',array('limit' => 11))
              ->create();
    }
}
