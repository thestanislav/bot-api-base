<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class GetUserStarSubscriptionMethod.
 *
 * Use this method to get information about a user's Star subscription. Returns a UserStarSubscription object.
 *
 * @see https://core.telegram.org/bots/api#getuserstarsubscription
 */
class GetUserStarSubscriptionMethod
{
    use FillFromArrayTrait;

    /**
     * Unique identifier of the target user.
     *
     * @var int
     */
    public int $userId;

    /**
     * Optional. Unique identifier of the business connection on behalf of which the subscription information will be retrieved.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * @param int        $userId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return GetUserStarSubscriptionMethod
     */
    public static function create(int $userId, array $data = null): GetUserStarSubscriptionMethod
    {
        $instance = new static();
        $instance->userId = $userId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
} 