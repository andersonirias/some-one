<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtores Model
 *
 * @method \App\Model\Entity\Produtore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produtore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produtore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produtore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produtore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produtore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produtore findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutoresTable extends Table
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

        $this->table('produtores');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');

        $validator
            ->integer('telefone')
            ->allowEmpty('telefone');

        $validator
            ->dateTime('criacao')
            ->requirePresence('criacao', 'create')
            ->notEmpty('criacao');

        $validator
            ->dateTime('alteracao')
            ->requirePresence('alteracao', 'create')
            ->notEmpty('alteracao');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
