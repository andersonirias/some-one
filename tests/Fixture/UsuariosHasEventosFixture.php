<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosHasEventosFixture
 *
 */
class UsuariosHasEventosFixture extends TestFixture
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
        'evento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_usuarios_has_eventos_usuarios' => ['type' => 'index', 'columns' => ['usuario'], 'length' => []],
            'fk_usuarios_has_eventos_eventos' => ['type' => 'index', 'columns' => ['evento'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_usuarios_has_eventos_eventos' => ['type' => 'foreign', 'columns' => ['evento'], 'references' => ['eventos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_usuarios_has_eventos_usuarios' => ['type' => 'foreign', 'columns' => ['usuario'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'evento' => 1
        ],
    ];
}
