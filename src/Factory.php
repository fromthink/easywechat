<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat;

/**
 * Class Factory.
 *
 * @method static \Fromthink\EasyWeChat\Payment\Application            payment(array $config)
 * @method static \Fromthink\EasyWeChat\MiniProgram\Application        miniProgram(array $config)
 * @method static \Fromthink\EasyWeChat\OpenPlatform\Application       openPlatform(array $config)
 * @method static \Fromthink\EasyWeChat\OfficialAccount\Application    officialAccount(array $config)
 * @method static \Fromthink\EasyWeChat\BasicService\Application       basicService(array $config)
 * @method static \Fromthink\EasyWeChat\Work\Application               work(array $config)
 * @method static \Fromthink\EasyWeChat\OpenWork\Application           openWork(array $config)
 * @method static \Fromthink\EasyWeChat\MicroMerchant\Application      microMerchant(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \Fromthink\EasyWeChat\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\EasyWeChat\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
