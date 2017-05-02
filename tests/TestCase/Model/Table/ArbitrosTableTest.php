<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArbitrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArbitrosTable Test Case
 */
class ArbitrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArbitrosTable
     */
    public $Arbitros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arbitros',
        'app.jornadas',
        'app.partidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Arbitros') ? [] : ['className' => 'App\Model\Table\ArbitrosTable'];
        $this->Arbitros = TableRegistry::get('Arbitros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arbitros);

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
}
