#!/usr/bin/env php
<?php
$finder = Symfony\CS\Finder::create()
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->exclude('vendor')
    ->in(__DIR__.'/src')
;
return Symfony\CS\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'short_array_syntax'
    ])
    ->finder($finder)
    ;
