<?php

namespace Src\Templates\Page;

use Src\Templates\Title\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected TitleTemplate $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
