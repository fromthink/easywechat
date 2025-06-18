<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\BasicService;

use Fromthink\EasyWeChat\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \Fromthink\EasyWeChat\BasicService\Jssdk\Client           $jssdk
 * @property \Fromthink\EasyWeChat\BasicService\Media\Client           $media
 * @property \Fromthink\EasyWeChat\BasicService\QrCode\Client          $qrcode
 * @property \Fromthink\EasyWeChat\BasicService\Url\Client             $url
 * @property \Fromthink\EasyWeChat\BasicService\ContentSecurity\Client $content_security
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Jssdk\ServiceProvider::class,
        QrCode\ServiceProvider::class,
        Media\ServiceProvider::class,
        Url\ServiceProvider::class,
        ContentSecurity\ServiceProvider::class,
    ];
}
