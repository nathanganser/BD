<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaneteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaneteTable Test Case
 */
class PlaneteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaneteTable
     */
    public $Planete;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Planete'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Planete') ? [] : ['className' => PlaneteTable::class];
        $this->Planete = TableRegistry::getTableLocator()->get('Planete', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Planete);

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
