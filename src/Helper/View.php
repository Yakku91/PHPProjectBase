<?php
namespace MyVideo\Helper;
class View {

    private string $basePath = __DIR__ . '/../../view/';


    /**
     * Gibt eine View aus.
     *
     * @param string $templateName Name/Dateiname des Templates
     * @param array $data Variablen welche an die View übergeben werden
     * @return void
     */
    public function render(string $templateName, array $data = []): void {
        include $this->basePath . $templateName . '.php';
    }

}
