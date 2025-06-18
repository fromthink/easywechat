<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\BasicService;

use Fromthink\EasyWeChat\OfficialAccount\Application;
use Fromthink\EasyWeChat\Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function testProperties()
    {
        $app = new Application();

        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\Media\Client::class, $app->media);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\Url\Client::class, $app->url);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\QrCode\Client::class, $app->qrcode);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\Jssdk\Client::class, $app->jssdk);
    }
}
