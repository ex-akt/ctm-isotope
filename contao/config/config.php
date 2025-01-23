<?php

// Add SCSS sources
$GLOBALS['TC_SOURCES']['configFiles'][] = 'bundles/contaothememanagerisotope/framework/scss/_config.scss';

// Push base css as first entry
array_unshift($GLOBALS['TC_SOURCES']['files'], 'bundles/contaothememanagerisotope/framework/scss/_isotope.scss');