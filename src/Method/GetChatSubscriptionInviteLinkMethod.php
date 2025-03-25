<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class GetChatSubscriptionInviteLinkMethod.
 *
 * Use this method to get information about a chat subscription invite link.
 * Returns a ChatSubscriptionInviteLink object.
 *
 * @see https://core.telegram.org/bots/api#getchatsubscriptioninvitelink
 */
class GetChatSubscriptionInviteLinkMethod
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;

    /**
     * Optional. Unique identifier of the business connection on behalf of which
     * the subscription invite link will be retrieved.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * @param int|string $chatId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return GetChatSubscriptionInviteLinkMethod
     */
    public static function create($chatId, array $data = null): GetChatSubscriptionInviteLinkMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
