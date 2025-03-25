<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class GiftType.
 *
 * This object represents a gift that can be sent to users.
 */
class GiftType
{
    /**
     * Unique identifier of the gift.
     *
     * @var string
     */
    public string $id;

    /**
     * Name of the gift.
     *
     * @var string
     */
    public string $name;

    /**
     * Description of the gift.
     *
     * @var string
     */
    public string $description;

    /**
     * Price of the gift in Stars.
     *
     * @var int
     */
    public int $price;

    /**
     * Optional. Number of Stars that will be added to the user's balance when upgrading.
     *
     * @var int|null
     */
    public ?int $upgradeStarCount = null;

    /**
     * Optional. Media associated with the gift.
     *
     * @var PhotoSizeType[]|null
     */
    public ?array $media = null;
} 