<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class InputPaidMediaType.
 *
 * This object represents the content of a paid media message to be sent.
 */
class InputPaidMediaType
{
    /**
     * Type of the result, must be photo or video.
     *
     * @var string
     */
    public string $type;

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet.
     *
     * @var string
     */
    public string $media;

    /**
     * Optional. Caption of the photo/video to be sent, 0-1024 characters after entities parsing.
     *
     * @var string|null
     */
    public ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the caption.
     *
     * @var string|null
     */
    public ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption.
     *
     * @var MessageEntityType[]|null
     */
    public ?array $captionEntities = null;

    /**
     * Optional. Price in Telegram Stars for the media.
     *
     * @var int|null
     */
    public ?int $price = null;

    /**
     * Optional. Pass True to show the caption above the media instead of below.
     *
     * @var bool|null
     */
    public ?bool $showCaptionAboveMedia = null;

    /**
     * Optional. Video thumbnail cover.
     *
     * @var InputFileType|string|null
     */
    public $cover = null;

    /**
     * Optional. Timestamp in seconds to start playing the video from.
     *
     * @var int|null
     */
    public ?int $startTimestamp = null;
} 