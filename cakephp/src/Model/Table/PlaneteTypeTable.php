<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlaneteType Model
 *
 * @method \App\Model\Entity\PlaneteType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlaneteType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlaneteType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlaneteType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaneteType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaneteType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlaneteType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlaneteType findOrCreate($search, callable $callback = null, $options = [])
 */
class PlaneteTypeTable extends Table
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

        $this->setTable('planete_type');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }
}
