<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActasTable Test Case
 */
class ActasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActasTable
     */
    public $Actas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actas',
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
        $config = TableRegistry::exists('Actas') ? [] : ['className' => 'App\Model\Table\ActasTable'];
        $this->Actas = TableRegistry::get('Actas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actas);

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
