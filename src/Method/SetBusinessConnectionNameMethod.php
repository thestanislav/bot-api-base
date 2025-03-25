<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class SetBusinessConnectionNameMethod.
 *
 * Use this method to set the name of a business connection. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#setbusinessconnectionname
 */
class SetBusinessConnectionNameMethod
{
    use FillFromArrayTrait;

    /**
     * Unique identifier of the target business connection.
     *
     * @var string
     */
    public string $businessConnectionId;

    /**
     * New name of the business connection; 0-128 characters.
     *
     * @var string
     */
    public string $name;

    /**
     * @param string     $businessConnectionId
     * @param string     $name
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return SetBusinessConnectionNameMethod
     */
    public static function create(
        string $businessConnectionId,
        string $name,
        array $data = null
    ): SetBusinessConnectionNameMethod {
        $instance = new self();
        $instance->businessConnectionId = $businessConnectionId;
        $instance->name = $name;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
