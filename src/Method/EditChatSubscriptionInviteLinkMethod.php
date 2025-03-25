<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class EditChatSubscriptionInviteLinkMethod.
 *
 * Use this method to edit the name of an existing subscription invite link.
 * Returns the edited invite link as a ChatInviteLink object.
 *
 * @see https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
 */
class EditChatSubscriptionInviteLinkMethod
{
    use FillFromArrayTrait;

    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername).
     *
     * @var int|string
     */
    public $chatId;

    /**
     * The invite link to edit.
     *
     * @var string
     */
    public string $inviteLink;

    /**
     * Optional. Invite link name; 0-32 characters.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Optional. Unique identifier of the business connection on behalf of which the invite link will be edited.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * @param int|string $chatId
     * @param string     $inviteLink
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditChatSubscriptionInviteLinkMethod
     */
    public static function create($chatId, string $inviteLink, array $data = null): EditChatSubscriptionInviteLinkMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        $instance->inviteLink = $inviteLink;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
