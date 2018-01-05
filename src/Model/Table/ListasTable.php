<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listas Model
 *
 * @method \App\Model\Entity\Lista get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lista newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lista|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lista[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lista findOrCreate($search, callable $callback = null, $options = [])
 */
class ListasTable extends Table
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

        $this->table('listas');
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->integer('evento')
            ->requirePresence('evento', 'create')
            ->notEmpty('evento');

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
}
