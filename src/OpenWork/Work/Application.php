<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OpenWork\Work;

use Fromthink\EasyWeChat\OpenWork\Application as OpenWork;
use Fromthink\EasyWeChat\OpenWork\Work\Auth\AccessToken;
use Fromthink\EasyWeChat\Work\Application as Work;

/**
 * Application.
 *
 * @author xiaomin <keacefull@gmail.com>
 */
class Application extends Work
{
    /**
     * Application constructor.
     *
     * @param string   $authCorpId
     * @param string   $permanentCode
     * @param OpenWork $component
     * @param array    $prepends
     */
    public function __construct(string $authCorpId, string $permanentCode, OpenWork $component, array $prepends = [])
    {
        parent::__construct(\array_merge($component->getConfig(), ['corp_id' => $authCorpId]), $prepends + [
                'access_token' => function ($app) use ($authCorpId, $permanentCode, $component) {
                    return new AccessToken($app, $authCorpId, $permanentCode, $component);
                },
            ]);
    }
}
