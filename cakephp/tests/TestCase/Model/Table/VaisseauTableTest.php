<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VaisseauTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VaisseauTable Test Case
 */
class VaisseauTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VaisseauTable
     */
    public $Vaisseau;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Vaisseau',
        'app.VaisseauClasse',
        'app.Constructeur'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Vaisseau') ? [] : ['className' => VaisseauTable::class];
        $this->Vaisseau = TableRegistry::getTableLocator()->get('Vaisseau', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vaisseau);

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
