<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Tests\Kernel\Messages;

use Fromthink\EasyWeChat\Kernel\Messages\Raw;
use Fromthink\EasyWeChat\Tests\TestCase;

class RawTest extends TestCase
{
    public function testBasicFeatures()
    {
        $content = '<xml><foo>foo</foo></xml>';
        $raw = new Raw($content);

        $this->assertSame($content, $raw->content);

        $this->assertSame($content, strval($raw));
    }
}
