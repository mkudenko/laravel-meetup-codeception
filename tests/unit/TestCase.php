<?php namespace UnitTests;

use Illuminate\Support\Facades\Artisan;

class TestCase extends \Illuminate\Foundation\Testing\TestCase
{

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        putenv('DB_DEFAULT=sqlite_testing');
        $app = require __DIR__ . '/../../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

    public function setUp()
    {
        parent::setUp();
        $this->prepareForTests();
    }

    public function tearDown()
    {
        $this->dropTables();
        parent::tearDown();
    }

    public function seeMyVar($var)
    {
        \Codeception\Util\Debug::debug($var);
    }

    protected function prepareForTests()
    {
        $this->createTables();
    }

    protected function createTables()
    {
        Artisan::call('migrate');
    }

    protected function dropTables()
    {
        Artisan::call('migrate:reset');
    }

}
