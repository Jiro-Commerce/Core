<?php 

// non-namespaced

class LaravelIntegrationTest extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * Laravel applicaiton enviroment bootstrap path
     *
     * @var string
     */
    private $bootstrap = __DIR__.'/../../vendor/laravel/laravel/bootstrap/app.php';

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require $this->bootstrap;

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
