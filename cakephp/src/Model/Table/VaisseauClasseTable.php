<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VaisseauClasse Model
 *
 * @method \App\Model\Entity\VaisseauClasse get($primaryKey, $options = [])
 * @method \App\Model\Entity\VaisseauClasse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VaisseauClasse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VaisseauClasse|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VaisseauClasse saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VaisseauClasse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VaisseauClasse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VaisseauClasse findOrCreate($search, callable $callback = null, $options = [])
 */
class VaisseauClasseTable extends Table
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

        $this->setTable('vaisseau_classe');
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
            ->scalar('classe')
            ->maxLength('classe', 100)
            ->requirePresence('classe', 'create')
            ->notEmptyString('classe');

        $validator
            ->scalar('Description')
            ->maxLength('Description', 100)
            ->allowEmptyString('Description');

        return $validator;
    }
}
