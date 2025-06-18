<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\OfficialAccount\Card;

use Fromthink\EasyWeChat\Kernel\Exceptions\InvalidArgumentException;

/**
 * Class Card.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\CodeClient          $code
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\MeetingTicketClient $meeting_ticket
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\MemberCardClient    $member_card
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\GeneralCardClient   $general_card
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\MovieTicketClient   $movie_ticket
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\CoinClient          $coin
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\SubMerchantClient   $sub_merchant
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\BoardingPassClient  $boarding_pass
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\JssdkClient         $jssdk
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardClient      $gift_card
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardOrderClient $gift_card_order
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardPageClient  $gift_card_page
 * @property \Fromthink\EasyWeChat\OfficialAccount\Card\InvoiceClient       $invoice
 */
class Card extends Client
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
        if (isset($this->app["card.{$property}"])) {
            return $this->app["card.{$property}"];
        }

        throw new InvalidArgumentException(sprintf('No card service named "%s".', $property));
    }
}
