<?php

use Phinx\Migration\AbstractMigration;

class CreatePlayersTable extends AbstractMigration
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
        $table=$this->table('players');
        $table->addColumn('nombre','string',array('limit' => 100))
              ->addColumn('apellido','string',array('limit' => 100))
              ->addColumn('direccion','string',array('limit' => 100))
              ->addColumn('pablacion','string',array('limit' => 100))
              ->addColumn('dni','text',array('limit' => 9))
              ->addColumn('telefono','string', array('limit'=>9))
              ->addColumn('nacionalidad','string')
              ->addColumn('f_nacimiento','date')
              ->addColumn('observaciones','string')
              ->addColumn('g_recibidos','integer',array('limit' => 2))
              ->addColumn('t_amarillas','integer',array('limit' => 2))
              ->addColumn('t_rojas','integer',array('limit' => 2))
              ->addColumn('t_acumuladas','integer',array('limit' => 2))
              ->addColumn('goles','integer',array('limit' => 2))
              ->addColumn('p_jugados','integer',array('limit' => 2))
              ->addColumn('p_sancionados','integer',array('limit' => 2))
              ->addColumn('dorsal','integer',array('limit' => 2))
              ->addColumn('photo','string')
              ->addColumn('photo_dir','string')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('team_id','integer',array('limit' => 11))
              ->create();

    }
}
