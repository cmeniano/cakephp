<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserinfosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserinfosTable Test Case
 */
class UserinfosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserinfosTable
     */
    public $Userinfos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Userinfos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Userinfos') ? [] : ['className' => UserinfosTable::class];
        $this->Userinfos = TableRegistry::getTableLocator()->get('Userinfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userinfos);

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
