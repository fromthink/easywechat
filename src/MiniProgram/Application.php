<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\MiniProgram;

use Fromthink\EasyWeChat\BasicService;
use Fromthink\EasyWeChat\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 *
 * @property \Fromthink\EasyWeChat\MiniProgram\Auth\AccessToken           $access_token
 * @property \Fromthink\EasyWeChat\MiniProgram\DataCube\Client            $data_cube
 * @property \Fromthink\EasyWeChat\MiniProgram\AppCode\Client             $app_code
 * @property \Fromthink\EasyWeChat\MiniProgram\Auth\Client                $auth
 * @property \Fromthink\EasyWeChat\OfficialAccount\Server\Guard           $server
 * @property \Fromthink\EasyWeChat\MiniProgram\Encryptor                  $encryptor
 * @property \Fromthink\EasyWeChat\MiniProgram\TemplateMessage\Client     $template_message
 * @property \Fromthink\EasyWeChat\OfficialAccount\CustomerService\Client $customer_service
 * @property \Fromthink\EasyWeChat\MiniProgram\Plugin\Client              $plugin
 * @property \Fromthink\EasyWeChat\MiniProgram\Plugin\DevClient           $plugin_dev
 * @property \Fromthink\EasyWeChat\MiniProgram\UniformMessage\Client      $uniform_message
 * @property \Fromthink\EasyWeChat\MiniProgram\ActivityMessage\Client     $activity_message
 * @property \Fromthink\EasyWeChat\MiniProgram\Express\Client             $express
 * @property \Fromthink\EasyWeChat\MiniProgram\NearbyPoi\Client           $nearby_poi
 * @property \Fromthink\EasyWeChat\MiniProgram\OCR\Client                 $ocr
 * @property \Fromthink\EasyWeChat\MiniProgram\Soter\Client               $soter
 * @property \Fromthink\EasyWeChat\BasicService\Media\Client              $media
 * @property \Fromthink\EasyWeChat\BasicService\ContentSecurity\Client    $content_security
 * @property \Fromthink\EasyWeChat\MiniProgram\Mall\ForwardsMall          $mall
 * @property \Fromthink\EasyWeChat\MiniProgram\SubscribeMessage\Client    $subscribe_message
 * @property \Fromthink\EasyWeChat\MiniProgram\RealtimeLog\Client         $realtime_log
 * @property \Fromthink\EasyWeChat\MiniProgram\RiskControl\Client         $risk_control
 * @property \Fromthink\EasyWeChat\MiniProgram\Search\Client              $search
 * @property \Fromthink\EasyWeChat\MiniProgram\Live\Client                $live
 * @property \Fromthink\EasyWeChat\MiniProgram\Broadcast\Client           $broadcast
 * @property \Fromthink\EasyWeChat\MiniProgram\UrlScheme\Client           $url_scheme
 * @property \Fromthink\EasyWeChat\MiniProgram\Union\Client               $union
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Register\Client       $shop_register
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Basic\Client          $shop_basic
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Account\Client        $shop_account
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Spu\Client            $shop_spu
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Order\Client          $shop_order
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Delivery\Client       $shop_delivery
 * @property \Fromthink\EasyWeChat\MiniProgram\Shop\Aftersale\Client      $shop_aftersale
 * @property \Fromthink\EasyWeChat\MiniProgram\Business\Client            $business
 * @property \Fromthink\EasyWeChat\MiniProgram\UrlLink\Client             $url_link
 * @property \Fromthink\EasyWeChat\MiniProgram\QrCode\Client              $qr_code
 * @property \Fromthink\EasyWeChat\MiniProgram\PhoneNumber\Client         $phone_number
 * @property \Fromthink\EasyWeChat\MiniProgram\ShortLink\Client           $short_link
 * @property \Fromthink\EasyWeChat\MiniProgram\Shipping\Client            $shipping
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        DataCube\ServiceProvider::class,
        AppCode\ServiceProvider::class,
        Server\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        CustomerService\ServiceProvider::class,
        UniformMessage\ServiceProvider::class,
        ActivityMessage\ServiceProvider::class,
        OpenData\ServiceProvider::class,
        Plugin\ServiceProvider::class,
        QrCode\ServiceProvider::class,
        Base\ServiceProvider::class,
        Express\ServiceProvider::class,
        NearbyPoi\ServiceProvider::class,
        OCR\ServiceProvider::class,
        Soter\ServiceProvider::class,
        Mall\ServiceProvider::class,
        SubscribeMessage\ServiceProvider::class,
        RealtimeLog\ServiceProvider::class,
        RiskControl\ServiceProvider::class,
        Search\ServiceProvider::class,
        Live\ServiceProvider::class,
        Broadcast\ServiceProvider::class,
        UrlScheme\ServiceProvider::class,
        UrlLink\ServiceProvider::class,
        Union\ServiceProvider::class,
        PhoneNumber\ServiceProvider::class,
        ShortLink\ServiceProvider::class,
        // Base services
        BasicService\Media\ServiceProvider::class,
        BasicService\ContentSecurity\ServiceProvider::class,

        Shop\Register\ServiceProvider::class,
        Shop\Basic\ServiceProvider::class,
        Shop\Account\ServiceProvider::class,
        Shop\Spu\ServiceProvider::class,
        Shop\Order\ServiceProvider::class,
        Shop\Delivery\ServiceProvider::class,
        Shop\Aftersale\ServiceProvider::class,
        Business\ServiceProvider::class,

        Shipping\ServiceProvider::class,
    ];

    /**
     * Handle dynamic calls.
     *
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        return $this->base->$method(...$args);
    }
}
