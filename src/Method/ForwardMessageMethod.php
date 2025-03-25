<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Exception\BadArgumentException;
use TgBotApi\BotApiBase\Method\Interfaces\ForwardMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\SendToChatVariablesTrait;

/**
 * Class ForwardMessageMethod.
 *
 * @see https://core.telegram.org/bots/api#forwardmessage
 */
class ForwardMessageMethod implements SendMethodAliasInterface, ForwardMethodAliasInterface
{
    use FillFromArrayTrait;
    use SendToChatVariablesTrait;

    /**
     * Unique identifier for the chat where the original message was sent
     * (or channel username in the format @channelusername).
     *
     * @var int|string
     */
    public $fromChatId;


    /**
     * Message identifier in the chat specified in from_chat_id.
     *
     * @var int
     */
    public $messageId;

    /**
     * Optional. Timestamp in seconds to start playing the video from, in case the forwarded message is a video.
     *
     * @var int|null
     */
    public ?int $videoStartTimestamp = null;

    /**
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param int        $messageId
     * @param array|null $data
     *
     * @throws BadArgumentException
     *
     * @return ForwardMessageMethod
     */
    public static function create($chatId, $fromChatId, int $messageId, array $data = null): self
    {
        $instance = new self();
        $instance->chatId = $chatId;
        $instance->fromChatId = $fromChatId;
        $instance->messageId = $messageId;

        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
