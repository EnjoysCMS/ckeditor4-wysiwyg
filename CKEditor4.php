<?php


namespace EnjoysCMS\WYSIWYG\CKEditor4;

use EnjoysCMS\Core\Components\WYSIWYG\WysiwygInterface;

class CKEditor4 implements WysiwygInterface
{
    private string $template;

    public function __construct(string $twigTemplate = null)
    {
        $this->template = $twigTemplate ?? '@wysisyg/ckeditor5/template/basic.twig';
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