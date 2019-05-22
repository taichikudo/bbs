<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookinfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookinfoTable Test Case
 */
class BookinfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookinfoTable
     */
    public $Bookinfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bookinfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bookinfo') ? [] : ['className' => BookinfoTable::class];
        $this->Bookinfo = TableRegistry::getTableLocator()->get('Bookinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bookinfo);

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
