<?php

namespace Fromthink\EasyWeChat\MiniProgram\RiskControl;

use Fromthink\EasyWeChat\Kernel\BaseClient;
use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use Fromthink\EasyWeChat\Kernel\Support\Collection;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * 安全风控
 *
 * Class Client
 * @package Fromthink\EasyWeChat\MiniProgram\RiskControl
 */
class Client extends BaseClient
{
    /**
     * 获取用户的安全等级
     *
     * @param  array  $params
     * @return array|Collection|object|ResponseInterface|string
     *
     * @throws InvalidConfigException
     * @throws GuzzleException
     */
    public function getUserRiskRank(array $params)
    {
        return $this->httpPostJson('wxa/getuserriskrank', $params);
    }
}
