<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Constructeur Model
 *
 * @property \App\Model\Table\VaisseauTable&\Cake\ORM\Association\HasMany $Vaisseau
 *
 * @method \App\Model\Entity\Constructeur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Constructeur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Constructeur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Constructeur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Constructeur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Constructeur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Constructeur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Constructeur findOrCreate($search, callable $callback = null, $options = [])
 */
class ConstructeurTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('constructeur');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Vaisseau', [
            'foreignKey' => 'constructeur_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nom_constructeur')
            ->maxLength('nom_constructeur', 50)
            ->requirePresence('nom_constructeur', 'create')
            ->notEmptyString('nom_constructeur');

        $validator
            ->integer('planete_constructeur')
            ->allowEmptyString('planete_constructeur');

        return $validator;
    }
}
