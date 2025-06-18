<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Work;

use Fromthink\EasyWeChat\Kernel\ServiceContainer;
use Fromthink\EasyWeChat\Work\MiniProgram\Application as MiniProgram;

/**
 * Application.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 *
 * @property \Fromthink\EasyWeChat\Work\OA\Client                             $oa
 * @property \Fromthink\EasyWeChat\Work\Auth\AccessToken                      $access_token
 * @property \Fromthink\EasyWeChat\Work\Agent\Client                          $agent
 * @property \Fromthink\EasyWeChat\Work\Department\Client                     $department
 * @property \Fromthink\EasyWeChat\Work\Media\Client                          $media
 * @property \Fromthink\EasyWeChat\Work\Menu\Client                           $menu
 * @property \Fromthink\EasyWeChat\Work\Message\Client                        $message
 * @property \Fromthink\EasyWeChat\Work\Message\Messenger                     $messenger
 * @property \Fromthink\EasyWeChat\Work\User\Client                           $user
 * @property \Fromthink\EasyWeChat\Work\User\TagClient                        $tag
 * @property \Fromthink\EasyWeChat\Work\Server\Guard                          $server
 * @property \Fromthink\EasyWeChat\Work\Jssdk\Client                          $jssdk
 * @property \Overtrue\Socialite\Providers\WeWork                   $oauth
 * @property \Fromthink\EasyWeChat\Work\Invoice\Client                        $invoice
 * @property \Fromthink\EasyWeChat\Work\Chat\Client                           $chat
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\Client                $external_contact
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\ContactWayClient      $contact_way
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\GroupChatWayClient    $group_chat_way
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\StatisticsClient      $external_contact_statistics
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\MessageClient         $external_contact_message
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\InterceptClient       $intercept
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\ProductClient         $product
 * @property \Fromthink\EasyWeChat\Work\GroupRobot\Client                     $group_robot
 * @property \Fromthink\EasyWeChat\Work\GroupRobot\Messenger                  $group_robot_messenger
 * @property \Fromthink\EasyWeChat\Work\Calendar\Client                       $calendar
 * @property \Fromthink\EasyWeChat\Work\Schedule\Client                       $schedule
 * @property \Fromthink\EasyWeChat\Work\MsgAudit\Client                       $msg_audit
 * @property \Fromthink\EasyWeChat\Work\Live\Client                           $live
 * @property \Fromthink\EasyWeChat\Work\CorpGroup\Client                      $corp_group
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\SchoolClient          $school
 * @property \Fromthink\EasyWeChat\Work\ExternalContact\MessageTemplateClient $external_contact_message_template
 * @property \Fromthink\EasyWeChat\Work\Kf\AccountClient                      $kf_account
 * @property \Fromthink\EasyWeChat\Work\Kf\ServicerClient                     $kf_servicer
 * @property \Fromthink\EasyWeChat\Work\Kf\MessageClient                      $kf_message
 * @property \Fromthink\EasyWeChat\Work\GroupWelcomeTemplate\Client           $group_welcome_templage
 * @property \Fromthink\EasyWeChat\Work\Wedrive\Wedrive                       $wedrive
 *
 * @method mixed getCallbackIp()
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        OA\ServiceProvider::class,
        Auth\ServiceProvider::class,
        Base\ServiceProvider::class,
        Menu\ServiceProvider::class,
        OAuth\ServiceProvider::class,
        User\ServiceProvider::class,
        Agent\ServiceProvider::class,
        Media\ServiceProvider::class,
        Message\ServiceProvider::class,
        Department\ServiceProvider::class,
        Server\ServiceProvider::class,
        Jssdk\ServiceProvider::class,
        Invoice\ServiceProvider::class,
        Chat\ServiceProvider::class,
        ExternalContact\ServiceProvider::class,
        GroupRobot\ServiceProvider::class,
        Calendar\ServiceProvider::class,
        Schedule\ServiceProvider::class,
        MsgAudit\ServiceProvider::class,
        Live\ServiceProvider::class,
        CorpGroup\ServiceProvider::class,
        Mobile\ServiceProvider::class,
        Kf\ServiceProvider::class,
        GroupWelcomeTemplate\ServiceProvider::class,
        Wedrive\ServiceProvider::class,
    ];

    /**
     * @var array
     */
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'https://qyapi.weixin.qq.com/',
        ],
    ];

    /**
     * Creates the miniProgram application.
     *
     * @return \Fromthink\EasyWeChat\Work\MiniProgram\Application
     */
    public function miniProgram(): MiniProgram
    {
        return new MiniProgram($this->getConfig());
    }

    /**
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return $this['base']->$method(...$arguments);
    }
}
