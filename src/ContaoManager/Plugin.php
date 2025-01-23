<?php

declare(strict_types=1);

namespace ContaoThemeManager\Isotope\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoThemeManager\Isotope\ContaoThemeManagerIsotope;
use ContaoThemeManager\Core\ContaoThemeManagerCore;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        //Hint: isotope is just declared as string, as it's a Contao 3 Bundle. 
        //      If it's a Contao 4 Bundle, you would use the class name. (SH,23.01.2025)
        return [
            BundleConfig::create(ContaoThemeManagerIsotope::class)
                ->setLoadAfter([ContaoCoreBundle::class, 'isotope', ContaoThemeManagerCore::class])
                ->setReplace(['ctm-isotope']),
        ];
    }
}
