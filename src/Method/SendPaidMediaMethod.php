<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\SendToChatVariablesTrait;
use TgBotApi\BotApiBase\Type\InputPaidMediaType;
use TgBotApi\BotApiBase\Type\ReplyParametersType;

/**
 * Class SendPaidMediaMethod.
 *
 * @see https://core.telegram.org/bots/api#sendpaidmedia
 */
class SendPaidMediaMethod implements SendMethodAliasInterface
{
    use FillFromArrayTrait;
    use SendToChatVariablesTrait;

    /**
     * The paid media to send.
     *
     * @var InputPaidMediaType
     */
    public InputPaidMediaType $media;

    /**
     * Optional. Business connection ID to send paid media on behalf of a business account.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * Optional. Additional interface options.
     *
     * @var ReplyParametersType|null
     */
    public ?ReplyParametersType $replyParameters = null;

    /**
     * @param int|string $chatId
     * @param InputPaidMediaType $media
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     */
    public static function create($chatId, InputPaidMediaType $media, array $data = null): SendPaidMediaMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->media = $media;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
} 