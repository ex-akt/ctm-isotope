<?php

declare(strict_types=1);

namespace ContaoThemeManager\Isotope;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoThemeManagerIsotope extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
