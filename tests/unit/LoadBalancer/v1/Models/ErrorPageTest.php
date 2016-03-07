<?php

namespace Rackspace\Test\LoadBalancer\v1\Models;

use OpenStack\Test\TestCase;
use Rackspace\LoadBalancer\v1\Api;
use Rackspace\LoadBalancer\v1\Models\ErrorPage;

class ErrorPageTest extends TestCase
{
    private $errorPage;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->errorPage = new ErrorPage($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_deletes()
    {
    }

    public function test_it_retrieves()
    {
    }
}