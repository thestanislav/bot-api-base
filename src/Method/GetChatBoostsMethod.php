<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class GetChatBoostsMethod.
 *
 * Use this method to get the list of all boosts added to a chat.
 * Requires administrator rights in the chat. Returns a ChatBoosts object.
 *
 * @see https://core.telegram.org/bots/api#getchatboosts
 */
class GetChatBoostsMethod
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;

    /**
     * @param int|string $chatId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return GetChatBoostsMethod
     */
    public static function create($chatId, array $data = null): GetChatBoostsMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
