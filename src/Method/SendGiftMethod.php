<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\SendToChatVariablesTrait;

/**
 * Class SendGiftMethod.
 *
 * Use this method to send a gift to a user or channel chat.
 *
 * @see https://core.telegram.org/bots/api#sendgift
 */
class SendGiftMethod implements SendMethodAliasInterface
{
    use FillFromArrayTrait;
    use SendToChatVariablesTrait;

    /**
     * Unique identifier of the gift.
     *
     * @var string
     */
    public string $giftId;

    /**
     * Optional. Pass True if the gift should be used to upgrade the target user's Star balance.
     *
     * @var bool|null
     */
    public ?bool $payForUpgrade = null;

    /**
     * @param int|string $chatId
     * @param string $giftId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     */
    public static function create($chatId, string $giftId, array $data = null): SendGiftMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->giftId = $giftId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
} 