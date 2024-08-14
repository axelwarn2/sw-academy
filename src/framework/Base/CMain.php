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
        $componentPath = $this->getComponentPath($component) . "component.php";
        $templatePath = $this->getTemplatePath($component, $template) . "/template.php";

        $this->render([$componentPath, $templatePath], $arParams);
    }

    protected function getComponentPath(string $component): string
    {
        $path = $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/components/{$component}/";
        if (!file_exists($path)) {
            return $this->getDocumentRoot() . "/components/{$component}/";
        }
        return $path;
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
        $this->render([$headerPath], $arResultHeader);
    }

    public function includeFooter(array $arResultFooter): void
    {
        $footerPath = $this->getDocumentRoot() . "/templates/{$this->mainTemplate}/footer.php";
        $this->render([$footerPath], $arResultFooter);
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

    public function render(array $templates, array $arParams = []): void
    {
        foreach ($templates as $template) {
            if (file_exists($template)) {
                ob_start();
                include $template;
                $content = ob_get_clean();
                echo $content;
            }
        }
    }

    public function frontedConfig(): string
    {
        return json_encode([
            'endpoint' => '/api.php',
        ]);
    }
}
