<?php

namespace Framework;

class CMain
{
    private $componentStyles = [];

    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        ob_start();
        include $this->getComponentPath($component) . "/component.php";
        $styles = file_get_contents($this->getTemplatePath($component, $template) . "/style.css");
        // echo "<style>$styles</style>";
        include $this->getTemplatePath($component, $template) . "/template.php";
        $content = ob_get_clean();

        echo $content;
    }

    protected function getComponentPath(string $component): string
    {
        return $this->getDocumentRoot() . "/components/{$component}/";
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "templates/{$template}";
    }

    public static function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }

    public function setCSS(array $components)
    {
        foreach ($components as $component => $template) {
            $stylePath = $this->getTemplatePath($component, $template) . '/style.css';
            $stylePath = strstr($stylePath, "component");
            $this->componentStyles[] = $stylePath;
        }
    }

    public function showCSS()
    {
        foreach ($this->componentStyles as $stylePath) {
            echo "<link rel=\"stylesheet\" href=\"$stylePath\">";
        }
    }
}
