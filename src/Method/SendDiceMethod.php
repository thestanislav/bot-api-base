<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Exception\BadArgumentException;
use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Method\Traits\SendToChatVariablesTrait;

/**
 * Class SendDiceMethod.
 *
 * Use this method to send a dice, which will have a random value from 1 to 6.
 * On success, the sent Message is returned.
 * (Yes, we're aware of the “proper” singular of die.
 * But it's awkward, and we decided to help it change.
 * One dice at a time!)
 *
 * @see https://core.telegram.org/bots/api#senddice
 */
class SendDiceMethod implements SendMethodAliasInterface
{
    use SendToChatVariablesTrait;
    use FillFromArrayTrait;

    public const EMOJI_DICE = '🎲';
    public const EMOJI_DARTS = '🎯';
    public const EMOJI_BASKETBALL = '🏀';
    public const EMOJI_FOOTBALL = '⚽';
    public const EMOJI_SLOT_MACHINE = '🎰';

    /**
     * Emoji on which the dice throw animation is based.
     * Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, or “🎰”.
     * Dice can have values 1-6 for “🎲” and “🎯”, values 1-5 for “🏀” and “⚽”,
     * and values 1-64 for “🎰”. Defaults to “🎲”.
     *
     * @var string|null
     */
    public $emoji;

    /**
     * @param int|string $chatId
     *
     * @throws BadArgumentException
     */
    public static function create($chatId, array $data = null): SendDiceMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;

        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }

    /**
     * @param $chatId
     *
     * @throws BadArgumentException
     */
    public static function createWithDice($chatId, array $data = null): SendDiceMethod
    {
        $instance = static::create($chatId, $data);
        $instance->emoji = static::EMOJI_DICE;

        return $instance;
    }

    /**
     * @param $chatId
     *
     * @throws BadArgumentException
     */
    public static function createWithDarts($chatId, array $data = null): SendDiceMethod
    {
        $instance = static::create($chatId, $data);
        $instance->emoji = self::EMOJI_DARTS;

        return $instance;
    }

    /**
     * @param $chatId
     *
     * @throws BadArgumentException
     */
    public static function createWithBasketball($chatId, array $data = null): SendDiceMethod
    {
        $instance = static::create($chatId, $data);
        $instance->emoji = self::EMOJI_BASKETBALL;

        return $instance;
    }

    /**
     * @param $chatId
     *
     * @throws BadArgumentException
     */
    public static function createWithFootBall($chatId, array $data = null): SendDiceMethod
    {
        $instance = static::create($chatId, $data);
        $instance->emoji = self::EMOJI_FOOTBALL;

        return $instance;
    }

    /**
     * @param $chatId
     *
     * @throws BadArgumentException
     */
    public static function createWithSlotMachine($chatId, array $data = null): SendDiceMethod
    {
        $instance = static::create($chatId, $data);
        $instance->emoji = self::EMOJI_SLOT_MACHINE;

        return $instance;
    }
}
