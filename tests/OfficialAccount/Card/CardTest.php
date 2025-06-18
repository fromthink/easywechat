<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Fromthink\EasyWeChat\Test\OfficialAccount\Card;

use Fromthink\EasyWeChat\OfficialAccount\Application;
use Fromthink\EasyWeChat\OfficialAccount\Card\BoardingPassClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\Card;
use Fromthink\EasyWeChat\OfficialAccount\Card\Client;
use Fromthink\EasyWeChat\OfficialAccount\Card\CodeClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\CoinClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\GeneralCardClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardOrderClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\GiftCardPageClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\InvoiceClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\JssdkClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\MeetingTicketClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\MemberCardClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\MovieTicketClient;
use Fromthink\EasyWeChat\OfficialAccount\Card\SubMerchantClient;
use Fromthink\EasyWeChat\Tests\TestCase;

class CardTest extends TestCase
{
    public function testBasicProperties()
    {
        $app = new Application();
        $card = new Card($app);

        $this->assertInstanceOf(Client::class, $card);
        $this->assertInstanceOf(BoardingPassClient::class, $card->boarding_pass);
        $this->assertInstanceOf(MeetingTicketClient::class, $card->meeting_ticket);
        $this->assertInstanceOf(MovieTicketClient::class, $card->movie_ticket);
        $this->assertInstanceOf(CoinClient::class, $card->coin);
        $this->assertInstanceOf(MemberCardClient::class, $card->member_card);
        $this->assertInstanceOf(GeneralCardClient::class, $card->general_card);
        $this->assertInstanceOf(CodeClient::class, $card->code);
        $this->assertInstanceOf(SubMerchantClient::class, $card->sub_merchant);
        $this->assertInstanceOf(JssdkClient::class, $card->jssdk);
        $this->assertInstanceOf(GiftCardClient::class, $card->gift_card);
        $this->assertInstanceOf(GiftCardOrderClient::class, $card->gift_card_order);
        $this->assertInstanceOf(GiftCardPageClient::class, $card->gift_card_page);
        $this->assertInstanceOf(InvoiceClient::class, $card->invoice);

        try {
            $card->foo;
            $this->fail('No expected exception thrown.');
        } catch (\Exception $e) {
            $this->assertSame('No card service named "foo".', $e->getMessage());
        }
    }
}
