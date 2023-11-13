<?php

namespace Src\Factories;

use Src\Templates\Page\PageTemplate;
use Src\Templates\Page\PHPTemplatePageTemplate;
use Src\Templates\Renderer\PHPTemplateRenderer;
use Src\Templates\Renderer\TemplateRenderer;
use Src\Templates\Title\PHPTemplateTitleTemplate;
use Src\Templates\Title\TitleTemplate;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
