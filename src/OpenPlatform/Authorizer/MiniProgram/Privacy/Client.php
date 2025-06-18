<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OpenPlatform\Authorizer\MiniProgram\Privacy;

use Fromthink\EasyWeChat\Kernel\BaseClient;
use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException;

/**
 * Class Client.
 *
 * @author lujunyi <lujunyi@shopex.cn>
 */
class Client extends BaseClient
{
    /**
     * 查询小程序用户隐私保护指引.
     */
    public function get()
    {
        return $this->httpPostJson('cgi-bin/component/getprivacysetting', []);
    }

    /**
     * 配置小程序用户隐私保护指引
     *
     * @param array $params
     *
     * @return array|\Fromthink\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function set(array $params)
    {
        return $this->httpPostJson('cgi-bin/component/setprivacysetting', $params);
    }

    /**
     * 上传小程序用户隐私保护指引
     *
     * @param string $path
     *
     * @return array|\Fromthink\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \Fromthink\EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \Fromthink\EasyWeChat\MicroMerchant\Kernel\Exceptions\InvalidSignException
     */
    public function upload(string $path)
    {
        if (!file_exists($path) || !is_readable($path)) {
            throw new InvalidArgumentException(sprintf("File does not exist, or the file is unreadable: '%s'", $path));
        }

        return $this->httpUpload('cgi-bin/component/uploadprivacyextfile', ['file' => $path]);
    }
}
