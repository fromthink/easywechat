<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\OfficialAccount\WiFi;

use Fromthink\EasyWeChat\OfficialAccount\WiFi\CardClient;
use Fromthink\EasyWeChat\Tests\TestCase;

class CardClientTest extends TestCase
{
    public function testSet()
    {
        $client = $this->mockApiClient(CardClient::class);

        $client->expects()
            ->httpPostJson('bizwifi/couponput/set', ['foo' => 'bar'])
            ->andReturn('mock-result');

        $this->assertSame('mock-result', $client->set(['foo' => 'bar']));
    }

    public function testGet()
    {
        $client = $this->mockApiClient(CardClient::class);

        $client->expects()
            ->httpPostJson('bizwifi/couponput/get', ['shop_id' => 100])
            ->andReturn('mock-result');

        $this->assertSame('mock-result', $client->get(100));
    }
}
