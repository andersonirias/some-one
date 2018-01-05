<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventosFixture
 *
 */
class EventosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tempoduracao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'curtidas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descurtidas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produtor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'endereco' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'criacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'alteracao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_eventos_tipos' => ['type' => 'index', 'columns' => ['tipo'], 'length' => []],
            'fk_eventos_categorias' => ['type' => 'index', 'columns' => ['categoria'], 'length' => []],
            'fk_eventos_produtores' => ['type' => 'index', 'columns' => ['produtor'], 'length' => []],
            'fk_eventos_enderecos' => ['type' => 'index', 'columns' => ['endereco'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_eventos_categorias' => ['type' => 'foreign', 'columns' => ['categoria'], 'references' => ['categorias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_eventos_enderecos' => ['type' => 'foreign', 'columns' => ['endereco'], 'references' => ['enderecos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_eventos_produtores' => ['type' => 'foreign', 'columns' => ['produtor'], 'references' => ['produtores', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_eventos_tipos' => ['type' => 'foreign', 'columns' => ['tipo'], 'references' => ['tipos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'titulo' => 'Lorem ipsum dolor sit amet',
            'descricao' => 'Lorem ipsum dolor sit amet',
            'data' => '2017-10-27 11:50:06',
            'tempoduracao' => 1,
            'tipo' => 1,
            'curtidas' => 1,
            'descurtidas' => 1,
            'categoria' => 1,
            'produtor' => 1,
            'endereco' => 1,
            'criacao' => '2017-10-27 11:50:06',
            'alteracao' => '2017-10-27 11:50:06'
        ],
    ];
}
