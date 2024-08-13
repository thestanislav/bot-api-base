<?php

namespace TgBotApi\BotApiBase\Method\Traits;

use TgBotApi\BotApiBase\Type\MessageEntityType;

trait ReplyParametersTrait
{
    public int $message_id;

    public int|string|null $chat_id = null;

    public ?bool $allow_sending_without_reply = null;
    public ?string $quote = null;

    public ?string $quote_parse_mode = null;


    /**
     * @var MessageEntityType[]|null
     */
    public ?array $quote_entities = null;

    public ?int $quote_position = null;
}
