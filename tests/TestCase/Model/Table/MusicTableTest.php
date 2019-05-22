<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MusicTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MusicTable Test Case
 */
class MusicTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MusicTable
     */
    public $Music;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Music'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Music') ? [] : ['className' => MusicTable::class];
        $this->Music = TableRegistry::getTableLocator()->get('Music', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Music);

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
