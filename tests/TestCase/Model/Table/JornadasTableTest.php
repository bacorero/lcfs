<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JornadasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JornadasTable Test Case
 */
class JornadasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JornadasTable
     */
    public $Jornadas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jornadas',
        'app.arbitros',
        'app.partidos',
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
        $config = TableRegistry::exists('Jornadas') ? [] : ['className' => 'App\Model\Table\JornadasTable'];
        $this->Jornadas = TableRegistry::get('Jornadas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jornadas);

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
