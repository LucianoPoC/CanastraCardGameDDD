<?php

declare(strict_types=1);

namespace App\Domain\Player\Hand\Model;

/**
 * Interface PlayerHandInterface
 *
 * @package App\Domain\Player\Hand\Factory
 */
interface PlayerHandInterface
{
    /**
     * @return array
     */
    public function getCards(): array;

    /**
     * @param  array $cards
     * @return PlayerHandInterface
     */
    public function setCards(array $cards): self;

    /**
     * @return mixed
     */
    public function __toString();
}
