<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class AffiliateInfoType.
 *
 * This object contains information about the affiliate involved in a Star transaction.
 */
class AffiliateInfoType
{
    /**
     * Unique identifier of the affiliate.
     *
     * @var int
     */
    public int $id;

    /**
     * Username of the affiliate.
     *
     * @var string|null
     */
    public ?string $username = null;

    /**
     * Name of the affiliate.
     *
     * @var string
     */
    public string $name;

    /**
     * Commission rate for the affiliate in percentage.
     *
     * @var float
     */
    public float $commissionRate;
} 