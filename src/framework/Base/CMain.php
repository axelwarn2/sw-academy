<?php

namespace Framework;

use Framework\Config;

class CMain
{
    private $componentStyles = [];
    private $mainTemplate;

    public function __construct()
    {
        $config = Config::getInstanse();
        $this->mainTemplate = $config->getEnv("MAIN_TEMPLATE", "main");
    }

    public function includeComponent(string $component, string $template = '', array $arParams = []): void
    {
        ob_start();
        include $this->getComponentPath($component) . "/component.php";
        include $this->getTemplatePath($component, $template) . "/template.php";
        $content = ob_get_clean();

        echo $content;
    }

    protected function getComponentPath(string $component): string
    {
        if (!$this->getDocumentRoot() . "/templates/{$this->mainTemplate}/") {
            return $this->getDocumentRoot() . "/components/{$component}/";
        }
        return $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/components/{$component}/";
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "templates/{$template}";
    }

    public static function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }

    public function includeHeader(array $arResultHeader): void
    {
        $headerPath = $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/header.php";
        ob_start();
        include $headerPath;
        $content = ob_get_clean();
        echo $content;
    }

    public function includeFooter(array $arResultFooter): void
    {
        $footerPath = $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/footer.php";
        ob_start();
        include $footerPath;
        $content = ob_get_clean();
        echo $content;
    }

    public function setCSS(array $components)
    {
        foreach ($components as $component => $template) {
            $stylePath = $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/";
            if (!file_exists($stylePath . "css/style.css")) {
                $stylePath .= "components/{$component}/templates/{$template}/style.css";
            } else {
                $stylePath .= "css/style.css";
            }
            $stylePath = strstr($stylePath, "templates");
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
