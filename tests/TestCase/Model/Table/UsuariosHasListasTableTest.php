<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosHasListasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosHasListasTable Test Case
 */
class UsuariosHasListasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosHasListasTable
     */
    public $UsuariosHasListas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios_has_listas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuariosHasListas') ? [] : ['className' => 'App\Model\Table\UsuariosHasListasTable'];
        $this->UsuariosHasListas = TableRegistry::get('UsuariosHasListas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuariosHasListas);

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
