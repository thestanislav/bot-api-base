<?php

namespace TgBotApi\BotApiBase\Method\Traits;

use TgBotApi\BotApiBase\Type\MessageEntityType;

trait ReplyParametersTrait
{
    public int $messageId;

    public int|string|null $chatId = null;

    public ?bool $allowSendingWithoutReply = null;
    public ?string $quote = null;

    public ?string $quoteParseMode = null;


    /**
     * @var MessageEntityType[]|null
     */
    public ?array $quoteEntities = null;
}
