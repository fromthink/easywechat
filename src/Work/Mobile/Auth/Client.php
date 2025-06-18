<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Work\Mobile\Auth;

use Fromthink\EasyWeChat\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * 通过code获取用户信息.
     *
     * @see https://open.work.weixin.qq.com/api/doc/90000/90136/91193
     *
     * @param string $code
     *
     * @return \Psr\Http\Message\ResponseInterface|\Fromthink\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function getUser(string $code)
    {
        $params = [
            'code' => $code,
        ];

        return $this->httpGet('cgi-bin/user/getuserinfo', $params);
    }
}
