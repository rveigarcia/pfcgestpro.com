<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JefesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JefesTable Test Case
 */
class JefesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JefesTable
     */
    public $Jefes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jefes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jefes') ? [] : ['className' => JefesTable::class];
        $this->Jefes = TableRegistry::getTableLocator()->get('Jefes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jefes);

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
