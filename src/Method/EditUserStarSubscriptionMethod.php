<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class EditUserStarSubscriptionMethod.
 *
 * Use this method to edit a user's Star subscription. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#edituserstarsubscription
 */
class EditUserStarSubscriptionMethod
{
    use FillFromArrayTrait;

    /**
     * Unique identifier of the target user.
     *
     * @var int
     */
    public int $userId;

    /**
     * Optional. Unique identifier of the business connection on behalf of which the subscription will be edited.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * Optional. Pass True to extend the subscription expiration date by the subscription period
     * specified in the invoice link.
     *
     * @var bool|null
     */
    public ?bool $extend = null;

    /**
     * Optional. Pass True to cancel the subscription at the end of the current billing period.
     *
     * @var bool|null
     */
    public ?bool $cancel = null;

    /**
     * @param int        $userId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditUserStarSubscriptionMethod
     */
    public static function create(int $userId, array $data = null): EditUserStarSubscriptionMethod
    {
        $instance = new self();
        $instance->userId = $userId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
