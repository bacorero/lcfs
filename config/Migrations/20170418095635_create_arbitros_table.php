<?php

use Phinx\Migration\AbstractMigration;

class CreateArbitrosTable extends AbstractMigration
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
        $table=$this->table('arbitros');
        $table->addColumn('nombre','string',array('limit' => 100))
              ->addColumn('apellido','string',array('limit' => 100))
              ->addColumn('direccion','string',array('limit' => 100))
              ->addColumn('poblacion','string',array('limit' => 100))
              ->addColumn('dni','text',array('limit' => 9))
              ->addColumn('telefono','string', array('limit'=>9))
              ->addColumn('nacionalidad','string')
              ->addColumn('f_nacimiento','date')
              ->addColumn('photo','string')
              ->addColumn('photo_dir','string')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
