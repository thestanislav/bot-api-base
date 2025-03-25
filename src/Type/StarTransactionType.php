<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class StarTransactionType.
 *
 * This object contains information about a Telegram Star transaction.
 */
class StarTransactionType
{
    /**
     * Unique transaction identifier.
     *
     * @var string
     */
    public string $id;

    /**
     * Amount of Stars transferred in the transaction.
     *
     * @var int
     */
    public int $amount;

    /**
     * Amount of nanostars transferred in the transaction.
     *
     * @var int
     */
    public int $nanostarAmount;

    /**
     * Point in time (Unix timestamp) when the transaction was completed.
     *
     * @var int
     */
    public int $timestamp;

    /**
     * Information about the partner involved in the transaction.
     *
     * @var TransactionPartnerType
     */
    public TransactionPartnerType $partner;

    /**
     * Optional. Information about the affiliate involved in the transaction.
     *
     * @var AffiliateInfoType|null
     */
    public ?AffiliateInfoType $affiliate = null;
} 