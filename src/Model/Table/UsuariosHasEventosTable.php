<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuariosHasEventos Model
 *
 * @method \App\Model\Entity\UsuariosHasEvento get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuariosHasEvento findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosHasEventosTable extends Table
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

        $this->table('usuarios_has_eventos');
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
            ->integer('usuario')
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->integer('evento')
            ->requirePresence('evento', 'create')
            ->notEmpty('evento');

        return $validator;
    }
}
