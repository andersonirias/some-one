<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosHasListasFixture
 *
 */
class UsuariosHasListasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lista' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_usuarios_has_listas_usuarios' => ['type' => 'index', 'columns' => ['usuario'], 'length' => []],
            'fk_usuarios_has_listas_listas' => ['type' => 'index', 'columns' => ['lista'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_usuarios_has_listas_listas' => ['type' => 'foreign', 'columns' => ['lista'], 'references' => ['listas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_usuarios_has_listas_usuarios' => ['type' => 'foreign', 'columns' => ['usuario'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'usuario' => 1,
            'lista' => 1
        ],
    ];
}
