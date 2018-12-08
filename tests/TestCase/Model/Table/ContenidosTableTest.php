<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContenidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContenidosTable Test Case
 */
class ContenidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContenidosTable
     */
    public $Contenidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contenidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contenidos') ? [] : ['className' => ContenidosTable::class];
        $this->Contenidos = TableRegistry::getTableLocator()->get('Contenidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contenidos);

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
