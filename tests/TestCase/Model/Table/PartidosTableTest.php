<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartidosTable Test Case
 */
class PartidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PartidosTable
     */
    public $Partidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.partidos',
        'app.arbitros',
        'app.jornadas',
        'app.actas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Partidos') ? [] : ['className' => 'App\Model\Table\PartidosTable'];
        $this->Partidos = TableRegistry::get('Partidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Partidos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
