<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookstateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookstateTable Test Case
 */
class BookstateTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookstateTable
     */
    public $Bookstate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bookstate'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bookstate') ? [] : ['className' => BookstateTable::class];
        $this->Bookstate = TableRegistry::getTableLocator()->get('Bookstate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bookstate);

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
