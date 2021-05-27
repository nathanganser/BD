<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vaisseau Model
 *
 * @property \App\Model\Table\VaisseauClasseTable&\Cake\ORM\Association\BelongsTo $VaisseauClasse
 * @property \App\Model\Table\ConstructeurTable&\Cake\ORM\Association\BelongsTo $Constructeur
 *
 * @method \App\Model\Entity\Vaisseau get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vaisseau newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vaisseau[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaisseau|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaisseau saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaisseau patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vaisseau[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaisseau findOrCreate($search, callable $callback = null, $options = [])
 */
class VaisseauTable extends Table
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

        $this->setTable('vaisseau');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('VaisseauClasse', [
            'foreignKey' => 'classe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Constructeur', [
            'foreignKey' => 'constructeur_id',
            'joinType' => 'INNER'
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
            ->scalar('nom_classe')
            ->maxLength('nom_classe', 100)
            ->requirePresence('nom_classe', 'create')
            ->notEmptyString('nom_classe');

        $validator
            ->numeric('longueur')
            ->allowEmptyString('longueur');

        $validator
            ->scalar('prix')
            ->maxLength('prix', 100)
            ->allowEmptyString('prix');

        $validator
            ->integer('equipage')
            ->requirePresence('equipage', 'create')
            ->notEmptyString('equipage');

        $validator
            ->boolean('boucliers')
            ->requirePresence('boucliers', 'create')
            ->notEmptyString('boucliers');

        $validator
            ->scalar('MGLT')
            ->maxLength('MGLT', 100)
            ->allowEmptyString('MGLT');

        $validator
            ->boolean('hyperdrive')
            ->requirePresence('hyperdrive', 'create')
            ->notEmptyString('hyperdrive');

        $validator
            ->integer('hyperdrive_classe')
            ->allowEmptyString('hyperdrive_classe');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['classe_id'], 'VaisseauClasse'));
        $rules->add($rules->existsIn(['constructeur_id'], 'Constructeur'));

        return $rules;
    }
}
