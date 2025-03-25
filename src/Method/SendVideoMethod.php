<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\HasParseModeVariableInterface;
use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\CaptionVariablesTrait;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\SendToChatVariablesTrait;
use TgBotApi\BotApiBase\Type\InputFileType;
use TgBotApi\BotApiBase\Type\ReplyParametersType;

/**
 * Class SendVideoMethod.
 *
 * @see https://core.telegram.org/bots/api#sendvideo
 */
class SendVideoMethod implements HasParseModeVariableInterface, SendMethodAliasInterface
{
    use FillFromArrayTrait;
    use SendToChatVariablesTrait;
    use CaptionVariablesTrait;

    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * Optional. Unique identifier for the target message thread (topic) of the forum; for forum supergroups only.
     *
     * @var int|null
     */
    public ?int $messageThreadId = null;

    /**
     * Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a video from the Internet,
     * or upload a new video using multipart/form-data.
     *
     * @var InputFileType|string
     */
    public $video;

    /**
     * Optional. Duration of sent video in seconds.
     *
     * @var int|null
     */
    public $duration;

    /**
     * Optional. Video width.
     *
     * @var int|null
     */
    public $width;

    /**
     * Optional. Video height.
     *
     * @var int|null
     */
    public $height;

    /**
     * Optional. Thumbnail of the file sent. The thumbnail should be in JPEG format and less than 200 kB in size.
     * A thumbnail's width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data.
     * Thumbnails can't be reused and can be only uploaded as a new file, so you can pass "attach://<file_attach_name>"
     * if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
     *
     * @var InputFileType|string|null
     */
    public $thumb;

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming.
     *
     * @var bool|null
     */
    public $supportStreaming;

    /**
     * Optional. Pass True if the video needs to be covered with a spoiler animation.
     *
     * @var bool|null
     */
    public ?bool $hasSpoiler = null;

    /**
     * Optional. Cover for the video in the message.
     *
     * @var InputFileType|string|null
     */
    public $cover;

    /**
     * Optional. Timestamp in seconds to start playing the video from.
     *
     * @var int|null
     */
    public $startTimestamp;

    /**
     * Optional. Pass True, if the caption must be shown above the message media.
     *
     * @var bool|null
     */
    public ?bool $showCaptionAboveMedia = null;

    /**
     * Optional. Sends the message silently. Users will receive a notification with no sound.
     *
     * @var bool|null
     */
    public ?bool $disableNotification = null;

    /**
     * Optional. Protects the contents of the sent message from forwarding and saving.
     *
     * @var bool|null
     */
    public ?bool $protectContent = null;

    /**
     * Optional. Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message.
     *
     * @var bool|null
     */
    public ?bool $allowPaidBroadcast = null;

    /**
     * Optional. Unique identifier of the message effect to be added to the message.
     *
     * @var string|null
     */
    public ?string $messageEffectId = null;

    /**
     * Optional. Description of the message to reply to.
     *
     * @var ReplyParametersType|null
     */
    public ?ReplyParametersType $replyParameters = null;

    /**
     * @param int|string           $chatId
     * @param InputFileType|string $video
     * @param array|null           $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return SendVideoMethod
     */
    public static function create($chatId, $video, array $data = null): SendVideoMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->video = $video;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
