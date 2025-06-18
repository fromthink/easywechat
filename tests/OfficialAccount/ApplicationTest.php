<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\OfficialAccount;

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
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Auth\AccessToken::class, $app->access_token);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Server\Guard::class, $app->server);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\User\UserClient::class, $app->user);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\User\TagClient::class, $app->user_tag);
        $this->assertInstanceOf(\Overtrue\Socialite\Providers\WeChat::class, $app->oauth);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Menu\Client::class, $app->menu);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\TemplateMessage\Client::class, $app->template_message);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Material\Client::class, $app->material);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\CustomerService\Client::class, $app->customer_service);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Semantic\Client::class, $app->semantic);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\DataCube\Client::class, $app->data_cube);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\AutoReply\Client::class, $app->auto_reply);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Broadcasting\Client::class, $app->broadcasting);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Card\Client::class, $app->card);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Device\Client::class, $app->device);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\ShakeAround\Client::class, $app->shake_around);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Base\Client::class, $app->base);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Draft\Client::class, $app->draft);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\FreePublish\Client::class, $app->free_publish);
    }
}
