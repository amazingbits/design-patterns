<?php

namespace Src\Factories;

use Src\Templates\Page\PageTemplate;
use Src\Templates\Renderer\TemplateRenderer;
use Src\Templates\Title\TitleTemplate;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;
    public function createPageTemplate(): PageTemplate;
    public function getRenderer(): TemplateRenderer;
}
