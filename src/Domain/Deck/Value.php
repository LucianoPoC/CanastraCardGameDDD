<?php

declare(strict_types=1);

namespace App\Domain\Deck;

/**
 * Class Value
 *
 * @package App\Domain\Deck
 */
class Value
{
    private $value;
    public const ACE = 'A';
    public const JACK = 'J';
    public const QUEEN = 'Q';
    public const KING = 'K';

    /**
     * Value constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param  string $value
     * @return Value
     */
    public function setValue(string $value): Value
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
