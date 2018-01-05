<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosHasEventosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosHasEventosTable Test Case
 */
class UsuariosHasEventosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosHasEventosTable
     */
    public $UsuariosHasEventos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios_has_eventos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuariosHasEventos') ? [] : ['className' => 'App\Model\Table\UsuariosHasEventosTable'];
        $this->UsuariosHasEventos = TableRegistry::get('UsuariosHasEventos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuariosHasEventos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
