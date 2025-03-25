<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class GetBusinessConnectionMethod.
 *
 * Use this method to get information about a business connection. Returns a BusinessConnection object.
 *
 * @see https://core.telegram.org/bots/api#getbusinessconnection
 */
class GetBusinessConnectionMethod
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
     * @return GetBusinessConnectionMethod
     */
    public static function create(string $businessConnectionId, array $data = null): GetBusinessConnectionMethod
    {
        $instance = new static();
        $instance->businessConnectionId = $businessConnectionId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
} 