<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionTable Test Case
 */
class RegionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionTable
     */
    public $Region;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Region'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Region') ? [] : ['className' => RegionTable::class];
        $this->Region = TableRegistry::getTableLocator()->get('Region', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Region);

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
