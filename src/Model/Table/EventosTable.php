<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eventos Model
 *
 * @method \App\Model\Entity\Evento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evento findOrCreate($search, callable $callback = null, $options = [])
 */
class EventosTable extends Table
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

        $this->table('eventos');
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
            ->dateTime('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        $validator
            ->integer('tempoduracao')
            ->requirePresence('tempoduracao', 'create')
            ->notEmpty('tempoduracao');

        $validator
            ->integer('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->integer('curtidas')
            ->allowEmpty('curtidas');

        $validator
            ->integer('descurtidas')
            ->allowEmpty('descurtidas');

        $validator
            ->integer('categoria')
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        $validator
            ->integer('produtor')
            ->requirePresence('produtor', 'create')
            ->notEmpty('produtor');

        $validator
            ->integer('endereco')
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

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
