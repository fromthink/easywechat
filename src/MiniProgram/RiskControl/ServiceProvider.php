<?php

namespace Fromthink\EasyWeChat\MiniProgram\RiskControl;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * 安全风控
 *
 * Class ServiceProvider
 * @package Fromthink\EasyWeChat\MiniProgram\RiskControl
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Container $app)
    {
        $app['risk_control'] = function ($app) {
            return new Client($app);
        };
    }
}
