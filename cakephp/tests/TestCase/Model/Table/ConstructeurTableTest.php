<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConstructeurTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConstructeurTable Test Case
 */
class ConstructeurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConstructeurTable
     */
    public $Constructeur;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Constructeur',
        'app.Vaisseau'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Constructeur') ? [] : ['className' => ConstructeurTable::class];
        $this->Constructeur = TableRegistry::getTableLocator()->get('Constructeur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Constructeur);

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
