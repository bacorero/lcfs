<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompetitiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompetitiosTable Test Case
 */
class CompetitiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompetitiosTable
     */
    public $Competitios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.competitios',
        'app.categorias',
        'app.teams',
        'app.players'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Competitios') ? [] : ['className' => 'App\Model\Table\CompetitiosTable'];
        $this->Competitios = TableRegistry::get('Competitios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Competitios);

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
