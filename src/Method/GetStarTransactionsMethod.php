<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\MethodInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class GetStarTransactionsMethod.
 *
 * Use this method to get the list of all Telegram Star transactions for the bot.
 *
 * @see https://core.telegram.org/bots/api#getstartransactions
 */
class GetStarTransactionsMethod implements MethodInterface
{
    use FillFromArrayTrait;

    /**
     * Optional. Offset of the first transaction to return
     *
     * @var int|null
     */
    public ?int $offset = null;

    /**
     * Optional. The maximum number of transactions to return
     *
     * @var int|null
     */
    public ?int $limit = null;

    /**
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     */
    public static function create(array $data = null): GetStarTransactionsMethod
    {
        $instance = new self();
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
