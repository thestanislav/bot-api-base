<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class VerifyUserMethod.
 *
 * Use this method to verify a user on behalf of an organization.
 *
 * @see https://core.telegram.org/bots/api#verifyuser
 */
class VerifyUserMethod implements MethodInterface
{
    use FillFromArrayTrait;

    /**
     * User identifier.
     *
     * @var int
     */
    public int $userId;

    /**
     * Optional. Organization identifier.
     *
     * @var string|null
     */
    public ?string $organizationId = null;

    /**
     * Optional. Additional data about the user in JSON format.
     *
     * @var string|null
     */
    public ?string $additionalData = null;

    /**
     * @param int $userId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     */
    public static function create(int $userId, array $data = null): VerifyUserMethod
    {
        $instance = new static();
        $instance->userId = $userId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
} 