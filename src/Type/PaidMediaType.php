<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class PaidMediaType.
 *
 * This object represents a paid media content.
 */
class PaidMediaType
{
    /**
     * Type of the media, can be "photo" or "video".
     *
     * @var string
     */
    public string $type;

    /**
     * File identifier of the media.
     *
     * @var string
     */
    public string $fileId;

    /**
     * Optional. Caption of the media.
     *
     * @var string|null
     */
    public ?string $caption = null;

    /**
     * Optional. List of special entities that appear in the caption.
     *
     * @var MessageEntityType[]|null
     */
    public ?array $captionEntities = null;

    /**
     * Price of the media in Stars.
     *
     * @var int
     */
    public int $price;

    /**
     * Optional. Pass True to show the caption above the media instead of below.
     *
     * @var bool|null
     */
    public ?bool $showCaptionAboveMedia = null;

    /**
     * Optional. Video thumbnail cover.
     *
     * @var string|null
     */
    public ?string $cover = null;

    /**
     * Optional. Timestamp in seconds to start playing the video from.
     *
     * @var int|null
     */
    public ?int $startTimestamp = null;
} 