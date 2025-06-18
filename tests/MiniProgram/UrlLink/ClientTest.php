<?php

namespace Fromthink\EasyWeChat\Tests\MiniProgram\UrlLink;

use Fromthink\EasyWeChat\MiniProgram\UrlLink\Client;
use Fromthink\EasyWeChat\Tests\TestCase;

class ClientTest extends TestCase
{
    public function testGenerate()
    {
        $client = $this->mockApiClient(Client::class)->makePartial();

        $client->expects()->httpPostJson('wxa/generate_urllink', [
            'path' => 'pages/home/index',
            'query' => '1002',
        ])->andReturn('mock-result');

        $this->assertSame('mock-result', $client->generate([
            'path' => 'pages/home/index',
            'query' => '1002',
        ]));
    }
}
