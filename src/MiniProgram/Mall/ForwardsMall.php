<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\MiniProgram\Mall;

/**
 * Class Application.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 *
 * @property \Fromthink\EasyWeChat\MiniProgram\Mall\OrderClient   $order
 * @property \Fromthink\EasyWeChat\MiniProgram\Mall\CartClient    $cart
 * @property \Fromthink\EasyWeChat\MiniProgram\Mall\ProductClient $product
 * @property \Fromthink\EasyWeChat\MiniProgram\Mall\MediaClient   $media
 */
class ForwardsMall
{
    /**
     * @var \Fromthink\EasyWeChat\Kernel\ServiceContainer
     */
    protected $app;

    /**
     * @param \Fromthink\EasyWeChat\Kernel\ServiceContainer $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * @param string $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        return $this->app["mall.{$property}"];
    }
}
