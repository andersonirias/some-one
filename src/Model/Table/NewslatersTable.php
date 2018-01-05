<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newslaters Model
 *
 * @method \App\Model\Entity\Newslater get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newslater newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Newslater[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newslater|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newslater patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newslater[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newslater findOrCreate($search, callable $callback = null, $options = [])
 */
class NewslatersTable extends Table
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

        $this->table('newslaters');
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
            ->allowEmpty('nome');

        $validator
            ->email('email')
            ->allowEmpty('email');

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
