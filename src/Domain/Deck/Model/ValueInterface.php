<?php

namespace App\Domain\Deck\Model;


/**
 * Class Value
 *
 * @package App\Domain\Deck
 */
interface ValueInterface
{
    /**
     * @param string $value
     * @return Value
     */
    public function setValue(string $value): Value;

    /**
     * @return string
     */
    public function getValue(): string;
}