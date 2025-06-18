<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OfficialAccount\ShakeAround;

use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException;

/**
 * Class Card.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\DeviceClient   $device
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\GroupClient    $group
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\MaterialClient $material
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\RelationClient $relation
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\StatsClient    $stats
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\PageClient     $page
 */
class ShakeAround extends Client
{
    /**
     * @param string $property
     *
     * @return mixed
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     */
    public function __get($property)
    {
        if (isset($this->app["shake_around.{$property}"])) {
            return $this->app["shake_around.{$property}"];
        }

        throw new InvalidArgumentException(sprintf('No shake_around service named "%s".', $property));
    }
}
