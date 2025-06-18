<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\OfficialAccount\ShakeAround;

use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use Fromthink\EasyWeChat\OfficialAccount\Application;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\Client;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\DeviceClient;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\GroupClient;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\MaterialClient;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\RelationClient;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\ShakeAround;
use Fromthink\EasyWeChat\OfficialAccount\ShakeAround\StatsClient;
use Fromthink\EasyWeChat\Tests\TestCase;

class ShakeAroundTest extends TestCase
{
    public function testInstances()
    {
        $app = new Application();
        $shakeAround = new ShakeAround($app);

        $this->assertInstanceOf(Client::class, $shakeAround);
        $this->assertInstanceOf(DeviceClient::class, $shakeAround->device);
        $this->assertInstanceOf(GroupClient::class, $shakeAround->group);
        $this->assertInstanceOf(MaterialClient::class, $shakeAround->material);
        $this->assertInstanceOf(RelationClient::class, $shakeAround->relation);
        $this->assertInstanceOf(StatsClient::class, $shakeAround->stats);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No shake_around service named "foo".', $shakeAround->foo);
    }
}
