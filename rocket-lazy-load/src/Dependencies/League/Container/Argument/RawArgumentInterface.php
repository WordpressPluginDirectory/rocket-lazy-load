<?php declare(strict_types=1);

namespace RocketLazyLoadPlugin\Dependencies\League\Container\Argument;

interface RawArgumentInterface
{
    /**
     * Return the value of the raw argument.
     *
     * @return mixed
     */
    public function getValue();
}
