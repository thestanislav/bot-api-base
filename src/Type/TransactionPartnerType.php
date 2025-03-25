<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class TransactionPartnerType.
 *
 * This object contains information about the partner involved in a Star transaction.
 */
class TransactionPartnerType
{
    /**
     * Type of the partner, can be "user", "chat", "affiliate_program", or "telegram_ads".
     *
     * @var string
     */
    public string $type;

    /**
     * Optional. Information about the user involved in the transaction.
     *
     * @var UserType|null
     */
    public ?UserType $user = null;

    /**
     * Optional. Information about the chat involved in the transaction.
     *
     * @var ChatType|null
     */
    public ?ChatType $chat = null;

    /**
     * Optional. Information about the affiliate program involved in the transaction.
     *
     * @var string|null
     */
    public ?string $affiliateProgram = null;

    /**
     * Optional. Information about the Telegram Ads platform involved in the transaction.
     *
     * @var string|null
     */
    public ?string $telegramAds = null;

    /**
     * Optional. Bot-specified invoice payload for transactions with users.
     *
     * @var string|null
     */
    public ?string $invoicePayload = null;

    /**
     * Optional. Subscription period for transactions involving subscriptions.
     *
     * @var string|null
     */
    public ?string $subscriptionPeriod = null;

    /**
     * Optional. Information about the gift involved in the transaction.
     *
     * @var GiftType|null
     */
    public ?GiftType $gift = null;

    /**
     * Optional. Information about the paid media involved in the transaction.
     *
     * @var PaidMediaType|null
     */
    public ?PaidMediaType $paidMedia = null;
} 