<?php 


class ProcessRenoColorsConfig extends ModuleConfig {
    public function __construct() {

        // add color picker js
        $this->config->scripts->add("{$this->config->urls->ProcessRenoColors}minicolors/jquery.minicolors.min.js");        
        $this->config->styles->add("{$this->config->urls->ProcessRenoColors}minicolors/jquery.minicolors.css");    

        $this->config->scripts->add("{$this->config->urls->ProcessRenoColors}ProcessRenoColors.js");        

        $this->add([
            [
                'label' => 'Main Colors',
                'name' => 'colors',
                'type' => 'fieldset',
                "columnWidth" => 50,
                "children" =>[
                    [
                        'name' => 'header_color',
                        'label' => 'Header Background Color',
                        'type' => 'text',
                        'value' => "#4289cc",
                        "columnWidth" => 25,
                    ],
                    [
                        'name' => 'link_color',
                        'label' => 'Link Color',
                        'type' => 'text',
                        'value' => "#0a89ff",
                        "columnWidth" => 25,
                    ],
                    [
                        'name' => 'sidebar_color',
                        'label' => 'Sidebar Color',
                        'type' => 'text',
                        'value' => "#333",
                        "columnWidth" => 25,
                    ],
                    [
                        'name' => 'button_color',
                        'label' => 'Button Color',
                        'type' => 'text',
                        'value' => "#333",
                        "columnWidth" => 25,
                    ],
                ],
            ]
        ]);
    }
}