<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VaisseauClasseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VaisseauClasseTable Test Case
 */
class VaisseauClasseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VaisseauClasseTable
     */
    public $VaisseauClasse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VaisseauClasse'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VaisseauClasse') ? [] : ['className' => VaisseauClasseTable::class];
        $this->VaisseauClasse = TableRegistry::getTableLocator()->get('VaisseauClasse', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VaisseauClasse);

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
