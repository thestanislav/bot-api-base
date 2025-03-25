<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class RefundStarPaymentMethod.
 *
 * Use this method to refund a Star payment. Returns True on success.
 *
 * @see https://core.telegram.org/bots/api#refundstarpayment
 */
class RefundStarPaymentMethod
{
    use FillFromArrayTrait;

    /**
     * Telegram payment identifier.
     *
     * @var string
     */
    public string $telegramPaymentId;

    /**
     * Optional. Unique identifier of the business connection on behalf of which the payment will be refunded.
     *
     * @var string|null
     */
    public ?string $businessConnectionId = null;

    /**
     * @param string     $telegramPaymentId
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return RefundStarPaymentMethod
     */
    public static function create(string $telegramPaymentId, array $data = null): RefundStarPaymentMethod
    {
        $instance = new self();
        $instance->telegramPaymentId = $telegramPaymentId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
