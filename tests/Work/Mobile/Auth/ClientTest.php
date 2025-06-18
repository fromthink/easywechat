<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\Work\Mobile\Auth;

use Fromthink\EasyWeChat\Tests\TestCase;
use Fromthink\EasyWeChat\Work\Mobile\Auth\Client;

/**
 * Class Auth.
 *
 * @author 读心印 <aa24615@qq.com>
 */
class ClientTest extends TestCase
{
    public function testGetUserinfo()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('cgi-bin/user/getuserinfo', [
            'code' => 'codexxxxxx'
        ])->andReturn('mock-result');

        $this->assertSame('mock-result', $client->getUser('codexxxxxx'));
    }
}
