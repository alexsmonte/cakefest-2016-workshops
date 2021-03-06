<?php
namespace Newsletter\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Newsletter\Model\Table\TemplatesTable;

/**
 * Newsletter\Model\Table\TemplatesTable Test Case
 */
class TemplatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Newsletter\Model\Table\TemplatesTable
     */
    public $Templates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.newsletter.templates',
        'plugin.newsletter.campaigns',
        'plugin.newsletter.logs',
        'plugin.newsletter.users',
        'plugin.newsletter.mailing_lists',
        'plugin.newsletter.campaigns_mailing_lists',
        'plugin.newsletter.mailing_lists_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Templates') ? [] : ['className' => 'Newsletter\Model\Table\TemplatesTable'];
        $this->Templates = TableRegistry::get('Templates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Templates);

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
