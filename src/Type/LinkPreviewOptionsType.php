<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class LinkPreviewOptionsType.
 *
 * This object represents options for link preview customization.
 */
class LinkPreviewOptionsType
{
    /**
     * Optional. True, if the link preview is disabled.
     *
     * @var bool|null
     */
    public ?bool $isDisabled = null;

    /**
     * Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
     *
     * @var string|null
     */
    public ?string $url = null;

    /**
     * Optional. True, if the media in the link preview should be shown above the message text.
     *
     * @var bool|null
     */
    public ?bool $preferSmallMedia = null;

    /**
     * Optional. True, if the media in the link preview should be larger.
     *
     * @var bool|null
     */
    public ?bool $preferLargeMedia = null;

    /**
     * Optional. True, if the link preview should show a large image/video.
     *
     * @var bool|null
     */
    public ?bool $showAboveText = null;
} 