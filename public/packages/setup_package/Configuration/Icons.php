<?php
$packageKey = 'EXT:setup_package';
//$iconPathSVG = '/Resources/Public/Icons/SVGs/Active/';

return [
    'theme' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        'source' => '' . $packageKey . '/ext_icon.gif',
        'name' => 'theme'
    ],
];