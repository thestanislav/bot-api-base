<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class VerifyChatMethod.
 *
 * Use this method to verify a chat on behalf of an organization.
 *
 * @see https://core.telegram.org/bots/api#verifychat
 */
class VerifyChatMethod implements MethodInterface
{
    use FillFromArrayTrait;

    /**
     * Chat identifier.
     *
     * @var int|string
     */
    public $chatId;

    /**
     * Optional. Organization identifier.
     *
     * @var string|null
     */
    public ?string $organizationId = null;

    /**
     * Optional. Additional data about the chat in JSON format.
     *
     * @var string|null
     */
    public ?string $additionalData = null;

    /**
     * @param int|string $chatId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     */
    public static function create($chatId, array $data = null): VerifyChatMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
