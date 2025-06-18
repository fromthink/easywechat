<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\OpenWork;

use Fromthink\EasyWeChat\OpenWork\Application;
use Fromthink\EasyWeChat\Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function testProperties()
    {
        $app = new Application(['corp_id' => 'mock-corp-id']);

        $this->assertInstanceOf(\Fromthink\EasyWeChat\OpenWork\Server\Guard::class, $app->server);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OpenWork\Corp\Client::class, $app->corp);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OpenWork\Provider\Client::class, $app->provider);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OpenWork\MiniProgram\Client::class, $app->mini_program);
    }

    public function testWork()
    {
        $app = new Application(['corp_id' => 'mock-corp-id']);
        $work = $app->work('mock-auth-corp-id', 'mock-permanent-code');

        $this->assertInstanceOf('\Fromthink\EasyWeChat\OpenWork\Work\Application', $work);
        $this->assertInstanceOf('Fromthink\EasyWeChat\OpenWork\Work\Auth\AccessToken', $work->access_token);

        $this->assertInstanceOf('Fromthink\EasyWeChat\Work\Application', $work);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\OA\Client::class, $work->oa);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Agent\Client::class, $work->agent);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Chat\Client::class, $work->chat);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Department\Client::class, $work->department);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Media\Client::class, $work->media);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Menu\Client::class, $work->menu);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Message\Client::class, $work->message);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Message\Messenger::class, $work->messenger);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Server\Guard::class, $work->server);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\Jssdk\Client::class, $work->jssdk);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\OAuth\Manager::class, $work->oauth);
    }

    public function testDynamicCalls()
    {
        $app = new Application(['corp_id' => 'mock-corp-id']);
        $app['base'] = new class() {
            public function dummyMethod()
            {
                return 'mock-result';
            }
        };

        $this->assertSame('mock-result', $app->dummyMethod());
    }
}
