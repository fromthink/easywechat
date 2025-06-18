<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Work\MiniProgram\Auth;

use Fromthink\EasyWeChat\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Get session info by code.
     *
     * @param string $code
     *
     * @return \Psr\Http\Message\ResponseInterface|\Fromthink\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function session(string $code)
    {
        $params = [
            'js_code' => $code,
            'grant_type' => 'authorization_code',
        ];

        return $this->httpGet('cgi-bin/miniprogram/jscode2session', $params);
    }
}
