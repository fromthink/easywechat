<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OfficialAccount\AutoReply;

use Fromthink\EasyWeChat\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * Get current auto reply settings.
     *
     * @return \Psr\Http\Message\ResponseInterface|\Fromthink\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function current()
    {
        return $this->httpGet('cgi-bin/get_current_autoreply_info');
    }
}
