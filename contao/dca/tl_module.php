<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// Remove iso_cols
PaletteManipulator::create()
    ->removeField('iso_cols', 'template_legend')
    ->applyToPalette('iso_productlist', 'tl_module')
    ->applyToPalette('iso_productvariantlist', 'tl_module')
    ->applyToPalette('iso_relatedproducts', 'tl_module')
;