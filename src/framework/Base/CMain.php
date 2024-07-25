<?php

namespace Framework;

class CMain
{
    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        include $this->getComponentPath($component) . "/component.php";
        $style = file_get_contents($this->getTemplatePath($component, $template) . "/style.css");
        echo "<style>$styles</style>";
        include $this->getTemplatePath($component, $template) . "/template.php";
    }

    protected function getComponentPath(string $component): string
    {
        return $this->getDocumentRoot() . "/components/{$component}/";
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "templates/{$template}";
    }

    public function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }
}
