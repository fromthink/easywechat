<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OfficialAccount;

use Fromthink\EasyWeChat\BasicService;
use Fromthink\EasyWeChat\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \Fromthink\EasyWeChat\BasicService\Media\Client                     $media
 * @property \Fromthink\EasyWeChat\BasicService\Url\Client                       $url
 * @property \Fromthink\EasyWeChat\BasicService\QrCode\Client                    $qrcode
 * @property \Fromthink\EasyWeChat\BasicService\Jssdk\Client                     $jssdk
 * @property \Fromthink\EasyWeChat\OfficialAccount\Auth\AccessToken              $access_token
 * @property \Fromthink\EasyWeChat\OfficialAccount\Server\Guard                  $server
 * @property \Fromthink\EasyWeChat\OfficialAccount\User\UserClient               $user
 * @property \Fromthink\EasyWeChat\OfficialAccount\User\TagClient                $user_tag
 * @property \Fromthink\EasyWeChat\OfficialAccount\Menu\Client                   $menu
 * @property \Fromthink\EasyWeChat\OfficialAccount\TemplateMessage\Client        $template_message
 * @property \Fromthink\EasyWeChat\OfficialAccount\SubscribeMessage\Client       $subscribe_message
 * @property \Fromthink\EasyWeChat\OfficialAccount\Material\Client               $material
 * @property \Fromthink\EasyWeChat\OfficialAccount\CustomerService\Client        $customer_service
 * @property \Fromthink\EasyWeChat\OfficialAccount\CustomerService\SessionClient $customer_service_session
 * @property \Fromthink\EasyWeChat\OfficialAccount\Semantic\Client               $semantic
 * @property \Fromthink\EasyWeChat\OfficialAccount\DataCube\Client               $data_cube
 * @property \Fromthink\EasyWeChat\OfficialAccount\AutoReply\Client              $auto_reply
 * @property \Fromthink\EasyWeChat\OfficialAccount\Broadcasting\Client           $broadcasting
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\Card                     $card
 * @property \Fromthink\EasyWeChat\OfficialAccount\Device\Client                 $device
 * @property \Fromthink\EasyWeChat\OfficialAccount\ShakeAround\ShakeAround       $shake_around
 * @property \Fromthink\EasyWeChat\OfficialAccount\POI\Client                    $poi
 * @property \Fromthink\EasyWeChat\OfficialAccount\Store\Client                  $store
 * @property \Fromthink\EasyWeChat\OfficialAccount\Base\Client                   $base
 * @property \Fromthink\EasyWeChat\OfficialAccount\Comment\Client                $comment
 * @property \Fromthink\EasyWeChat\OfficialAccount\OCR\Client                    $ocr
 * @property \Fromthink\EasyWeChat\OfficialAccount\Goods\Client                  $goods
 * @property \Overtrue\Socialite\Providers\WeChat                      $oauth
 * @property \Fromthink\EasyWeChat\OfficialAccount\WiFi\Client                   $wifi
 * @property \Fromthink\EasyWeChat\OfficialAccount\WiFi\CardClient               $wifi_card
 * @property \Fromthink\EasyWeChat\OfficialAccount\WiFi\DeviceClient             $wifi_device
 * @property \Fromthink\EasyWeChat\OfficialAccount\WiFi\ShopClient               $wifi_shop
 * @property \Fromthink\EasyWeChat\OfficialAccount\Guide\Client                  $guide
 * @property \Fromthink\EasyWeChat\OfficialAccount\Draft\Client                  $draft
 * @property \Fromthink\EasyWeChat\OfficialAccount\FreePublish\Client            $free_publish
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        Server\ServiceProvider::class,
        User\ServiceProvider::class,
        OAuth\ServiceProvider::class,
        Menu\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        SubscribeMessage\ServiceProvider::class,
        Material\ServiceProvider::class,
        CustomerService\ServiceProvider::class,
        Semantic\ServiceProvider::class,
        DataCube\ServiceProvider::class,
        POI\ServiceProvider::class,
        AutoReply\ServiceProvider::class,
        Broadcasting\ServiceProvider::class,
        Card\ServiceProvider::class,
        Device\ServiceProvider::class,
        ShakeAround\ServiceProvider::class,
        Store\ServiceProvider::class,
        Comment\ServiceProvider::class,
        Base\ServiceProvider::class,
        OCR\ServiceProvider::class,
        Goods\ServiceProvider::class,
        WiFi\ServiceProvider::class,
        Draft\ServiceProvider::class,
        FreePublish\ServiceProvider::class,
        // Base services
        BasicService\QrCode\ServiceProvider::class,
        BasicService\Media\ServiceProvider::class,
        BasicService\Url\ServiceProvider::class,
        BasicService\Jssdk\ServiceProvider::class,
        // Append Guide Interface
        Guide\ServiceProvider::class,
    ];
}
