<?php

namespace Rackspace\Test\LoadBalancer\v1\Models;

use OpenStack\Test\TestCase;
use Rackspace\LoadBalancer\v1\Api;
use Rackspace\LoadBalancer\v1\Models\LoadBalancer;

class LoadBalancerTest extends TestCase
{
    private $loadBalancer;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->loadBalancer = new LoadBalancer($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_updates()
    {
    }

    public function test_it_lists()
    {
    }

    public function test_it_deletes()
    {
    }

    public function test_it_retrieves()
    {
    }
}