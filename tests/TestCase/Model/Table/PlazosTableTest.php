<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlazosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlazosTable Test Case
 */
class PlazosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlazosTable
     */
    public $Plazos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plazos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Plazos') ? [] : ['className' => PlazosTable::class];
        $this->Plazos = TableRegistry::getTableLocator()->get('Plazos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Plazos);

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
