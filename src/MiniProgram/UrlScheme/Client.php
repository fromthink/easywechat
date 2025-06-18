<?php

namespace Fromthink\EasyWeChat\MiniProgram\UrlScheme;

use Fromthink\EasyWeChat\Kernel\BaseClient;
use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use Fromthink\EasyWeChat\Kernel\Support\Collection;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Url Scheme
 *
 * Class Client
 * @package Fromthink\EasyWeChat\MiniProgram\UrlScheme
 */
class Client extends BaseClient
{
    /**
     * 获取小程序scheme码
     *
     * @param  array  $param
     * @return array|Collection|object|ResponseInterface|string
     *
     * @throws GuzzleException
     * @throws InvalidConfigException
     */
    public function generate(array $param = [])
    {
        return $this->httpPostJson('wxa/generatescheme', $param);
    }
}
