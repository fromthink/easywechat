<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\OpenPlatform;

use Fromthink\EasyWeChat\OpenPlatform\Application;
use Fromthink\EasyWeChat\OpenPlatform\Auth\VerifyTicket;
use Fromthink\EasyWeChat\OpenPlatform\Server\Handlers\VerifyTicketRefreshed;
use Fromthink\EasyWeChat\Tests\TestCase;

class VerifyTicketRefreshedTest extends TestCase
{
    public function testHandle()
    {
        $app = new Application();
        $app['verify_ticket'] = \Mockery::mock(VerifyTicket::class, function ($mock) {
            $mock->expects()->setTicket('ticket');
        });
        $handler = new VerifyTicketRefreshed($app);

        $this->assertNull($handler->handle([
            'ComponentVerifyTicket' => 'ticket',
        ]));
    }
}
