<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HyperdriveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HyperdriveTable Test Case
 */
class HyperdriveTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HyperdriveTable
     */
    public $Hyperdrive;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Hyperdrive'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Hyperdrive') ? [] : ['className' => HyperdriveTable::class];
        $this->Hyperdrive = TableRegistry::getTableLocator()->get('Hyperdrive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hyperdrive);

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
