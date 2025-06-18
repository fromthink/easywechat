<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\Work;

use Fromthink\EasyWeChat\Tests\TestCase;
use Fromthink\EasyWeChat\Work\Application;
use Fromthink\EasyWeChat\Work\Base\Client;

class ApplicationTest extends TestCase
{
    public function testInstances()
    {
        $app = new Application([
            'corp_id' => 'xwnaka223',
            'agent_id' => 102093,
            'secret' => 'secret',
        ]);

        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\OA\Client::class, $app->oa);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Auth\AccessToken::class, $app->access_token);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Agent\Client::class, $app->agent);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Chat\Client::class, $app->chat);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Department\Client::class, $app->department);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Media\Client::class, $app->media);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Menu\Client::class, $app->menu);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Message\Client::class, $app->message);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Message\Messenger::class, $app->messenger);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Server\Guard::class, $app->server);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\BasicService\Jssdk\Client::class, $app->jssdk);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\OAuth\Manager::class, $app->oauth);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\ExternalContact\Client::class, $app->external_contact);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\ExternalContact\ContactWayClient::class, $app->contact_way);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\ExternalContact\GroupChatWayClient::class, $app->group_chat_way);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\ExternalContact\StatisticsClient::class, $app->external_contact_statistics);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\ExternalContact\MessageClient::class, $app->external_contact_message);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Live\Client::class, $app->live);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\CorpGroup\Client::class, $app->corp_group);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Wedrive\Wedrive::class, $app->wedrive);
    }

    public function testMiniProgram()
    {
        $app = new Application([
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'permission' => 0777,
                'file' => '/tmp/easywechat.log',
            ],
            'debug' => true,
            'corp_id' => 'corp-id',
            'agent_id' => 100020,
            'secret' => 'secret',
        ]);

        $miniProgram = $app->miniProgram();
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\MiniProgram\Application::class, $miniProgram);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\Auth\AccessToken::class, $miniProgram['access_token']);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\Work\MiniProgram\Auth\Client::class, $miniProgram['auth']);
        $this->assertArraySubset([
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'permission' => 0777,
                'file' => '/tmp/easywechat.log',
            ],
            'debug' => true,
            'corp_id' => 'corp-id',
            'agent_id' => 100020,
            'secret' => 'secret',
        ], $miniProgram->config->toArray());
    }

    public function testBaseCall()
    {
        $client = \Mockery::mock(Client::class);
        $client->expects()->getCallbackIp(1, 2, 3)->andReturn('mock-result');

        $app = new Application([]);
        $app['base'] = $client;

        $this->assertSame('mock-result', $app->getCallbackIp(1, 2, 3));
    }
}
