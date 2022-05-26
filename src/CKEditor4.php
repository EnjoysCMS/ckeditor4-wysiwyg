<?php


namespace EnjoysCMS\WYSIWYG\CKEditor4;

use EnjoysCMS\Core\Components\Helpers\Assets;
use EnjoysCMS\Core\Components\WYSIWYG\WysiwygInterface;

class CKEditor4 implements WysiwygInterface
{
    private string $twigTemplate;

    public function __construct()
    {
        $path = str_replace(realpath($_ENV['PROJECT_DIR']), '', realpath(__DIR__));
        Assets::createSymlink(
            sprintf('%s/assets%s/node_modules/ckeditor4', $_ENV['PUBLIC_DIR'], $path),
            __DIR__ . '/node_modules/ckeditor4'
        );
        Assets::js([
            [__DIR__.'/node_modules/ckeditor4/ckeditor.js']
        ]);
    }

    public function getTwigTemplate(): string
    {
        return $this->twigTemplate  ?? '@wysiwyg/ckeditor4/template/basic.twig';
    }


    public function setTwigTemplate(?string $twigTemplate): void
    {
        $this->twigTemplate = $twigTemplate;
    }
}
