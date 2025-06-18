<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OpenPlatform\Server\Handlers;

use Fromthink\EasyWeChat\Kernel\Contracts\EventHandlerInterface;
use Fromthink\EasyWeChat\Kernel\Traits\ResponseCastable;
use Fromthink\EasyWeChat\OpenPlatform\Application;

use function Fromthink\EasyWeChat\Kernel\data_get;

/**
 * Class VerifyTicketRefreshed.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 */
class VerifyTicketRefreshed implements EventHandlerInterface
{
    use ResponseCastable;

    /**
     * @var \Fromthink\EasyWeChat\OpenPlatform\Application
     */
    protected $app;

    /**
     * Constructor.
     *
     * @param \Fromthink\EasyWeChat\OpenPlatform\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * {@inheritdoc}.
     */
    public function handle($payload = null)
    {
        $ticket = data_get($payload, 'ComponentVerifyTicket');

        if (!empty($ticket)) {
            $this->app['verify_ticket']->setTicket($ticket);
        }
    }
}
