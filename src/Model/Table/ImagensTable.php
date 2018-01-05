<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imagens Model
 *
 * @method \App\Model\Entity\Imagen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Imagen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Imagen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imagen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Imagen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imagen findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagensTable extends Table
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

        $this->table('imagens');
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
            ->requirePresence('caminho', 'create')
            ->notEmpty('caminho');

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
