<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewslatersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewslatersTable Test Case
 */
class NewslatersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewslatersTable
     */
    public $Newslaters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newslaters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Newslaters') ? [] : ['className' => 'App\Model\Table\NewslatersTable'];
        $this->Newslaters = TableRegistry::get('Newslaters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newslaters);

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
