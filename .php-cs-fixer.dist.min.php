<?php
$header = <<<'EOF'

(c) Fidel Alejandro Fernandez Arias <ale94lko@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in(__DIR__ . '/src')
    ->name('*.php');

$config = new PhpCsFixer\Config;

$config->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules([
        'elseif' => true,
	]);

return $config;