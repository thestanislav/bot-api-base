<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class GetUserChatBoostsMethod.
 *
 * Use this method to get the list of boosts added to a chat by a user. Returns a UserChatBoosts object.
 *
 * @see https://core.telegram.org/bots/api#getuserchatboosts
 */
class GetUserChatBoostsMethod
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;

    /**
     * Unique identifier of the target user.
     *
     * @var int
     */
    public int $userId;

    /**
     * @param int|string $chatId
     * @param int       $userId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return GetUserChatBoostsMethod
     */
    public static function create($chatId, int $userId, array $data = null): GetUserChatBoostsMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        $instance->userId = $userId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
