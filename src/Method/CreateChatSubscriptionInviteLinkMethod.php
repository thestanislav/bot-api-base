<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class CreateChatSubscriptionInviteLinkMethod.
 *
 * Use this method to create a chat subscription invite link. Returns a ChatSubscriptionInviteLink object.
 *
 * @see https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
 */
class CreateChatSubscriptionInviteLinkMethod
{
    use FillFromArrayTrait;
    use ChatIdVariableTrait;

    /**
     * Optional. Unique identifier of the business connection on behalf of which
     * the subscription invite link will be created.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * Optional. Name of the subscription invite link; 0-128 characters.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Optional. Description of the subscription invite link; 0-255 characters.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Optional. The set of premium features that will become available to users upon subscription.
     *
     * @var array|null
     */
    public ?array $premiumFeatures = null;

    /**
     * @param int|string $chatId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return CreateChatSubscriptionInviteLinkMethod
     */
    public static function create($chatId, array $data = null): CreateChatSubscriptionInviteLinkMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
