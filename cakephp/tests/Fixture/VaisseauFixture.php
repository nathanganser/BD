<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VaisseauFixture
 */
class VaisseauFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'vaisseau';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nom_classe' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'longueur' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'prix' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'equipage' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'boucliers' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'MGLT' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'hyperdrive' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hyperdrive_classe' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'classe_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'constructeur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'constructeur_id' => ['type' => 'index', 'columns' => ['constructeur_id'], 'length' => []],
            'hyperdrive_classe' => ['type' => 'index', 'columns' => ['hyperdrive_classe'], 'length' => []],
            'classe_id' => ['type' => 'index', 'columns' => ['classe_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'vaisseau_ibfk_1' => ['type' => 'foreign', 'columns' => ['hyperdrive_classe'], 'references' => ['hyperdrive', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'vaisseau_ibfk_2' => ['type' => 'foreign', 'columns' => ['constructeur_id'], 'references' => ['constructeur', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'vaisseau_ibfk_3' => ['type' => 'foreign', 'columns' => ['classe_id'], 'references' => ['vaisseau_classe', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nom_classe' => 'Lorem ipsum dolor sit amet',
                'longueur' => 1,
                'prix' => 'Lorem ipsum dolor sit amet',
                'equipage' => 1,
                'boucliers' => 1,
                'MGLT' => 'Lorem ipsum dolor sit amet',
                'hyperdrive' => 1,
                'hyperdrive_classe' => 1,
                'classe_id' => 1,
                'constructeur_id' => 1
            ],
        ];
        parent::init();
    }
}
