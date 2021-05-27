<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaneteTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaneteTypeTable Test Case
 */
class PlaneteTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaneteTypeTable
     */
    public $PlaneteType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PlaneteType'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PlaneteType') ? [] : ['className' => PlaneteTypeTable::class];
        $this->PlaneteType = TableRegistry::getTableLocator()->get('PlaneteType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlaneteType);

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
