<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class GetBusinessConnectionNameMethod.
 *
 * Use this method to get the name of a business connection. Returns String on success.
 *
 * @see https://core.telegram.org/bots/api#getbusinessconnectionname
 */
class GetBusinessConnectionNameMethod
{
    use FillFromArrayTrait;

    /**
     * Unique identifier of the target business connection.
     *
     * @var string
     */
    public string $businessConnectionId;

    /**
     * @param string     $businessConnectionId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return GetBusinessConnectionNameMethod
     */
    public static function create(string $businessConnectionId, array $data = null): GetBusinessConnectionNameMethod
    {
        $instance = new self();
        $instance->businessConnectionId = $businessConnectionId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
