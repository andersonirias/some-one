<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutoresTable Test Case
 */
class ProdutoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutoresTable
     */
    public $Produtores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.produtores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Produtores') ? [] : ['className' => 'App\Model\Table\ProdutoresTable'];
        $this->Produtores = TableRegistry::get('Produtores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Produtores);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
