<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests;

use Fromthink\EasyWeChat\Factory;

class FactoryTest extends TestCase
{
    public function testStaticCall()
    {
        $officialAccount = Factory::officialAccount([
            'app_id' => 'corpid@123',
        ]);

        $officialAccountFromMake = Factory::make('officialAccount', [
            'app_id' => 'corpid@123',
        ]);

        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Application::class, $officialAccount);
        $this->assertInstanceOf(\Fromthink\EasyWeChat\OfficialAccount\Application::class, $officialAccountFromMake);

        $expected = [
            'app_id' => 'corpid@123',
        ];
        $this->assertArraySubset($expected, $officialAccount['config']->all());
        $this->assertArraySubset($expected, $officialAccountFromMake['config']->all());

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\OfficialAccount\Application::class,
            Factory::officialAccount(['appid' => 'appid@456'])
        );

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\OpenPlatform\Application::class,
            Factory::openPlatform(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\MiniProgram\Application::class,
            Factory::miniProgram(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\Payment\Application::class,
            Factory::payment(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\BasicService\Application::class,
            Factory::basicService(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Fromthink\EasyWeChat\Work\Application::class,
            Factory::work(['appid' => 'appid@789'])
        );
    }
}
