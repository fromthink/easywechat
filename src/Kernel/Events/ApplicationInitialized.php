<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Kernel\Events;

use Fromthink\EasyWeChat\Kernel\ServiceContainer;

/**
 * Class ApplicationInitialized.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 */
class ApplicationInitialized
{
    /**
     * @var \Fromthink\EasyWeChat\Kernel\ServiceContainer
     */
    public $app;

    /**
     * @param \Fromthink\EasyWeChat\Kernel\ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }
}
