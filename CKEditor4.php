<?php


namespace EnjoysCMS\WYSIWYG\CKEditor4;

use EnjoysCMS\Core\Components\Helpers\Assets;
use EnjoysCMS\Core\Components\WYSIWYG\WysiwygInterface;

class CKEditor4 implements WysiwygInterface
{
    private string $template;

    public function __construct(string $twigTemplate = null)
    {
        $this->template = $twigTemplate ?? '@wysisyg/ckeditor4/template/basic.twig';
        $path = str_replace($_ENV['PROJECT_DIR'], '', realpath(__DIR__));
        Assets::createSymlink(
            sprintf('%s/assets%s/node_modules/tinymce', $_ENV['PUBLIC_DIR'], $path),
            __DIR__ . '/node_modules/ckeditor4'
        );
    }

    public function getTwigTemplate(): string
    {
        return $this->template;
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }


}