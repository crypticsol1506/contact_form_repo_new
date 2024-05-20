<?php

class Form implements Renderable {
    private $elements = [];
    private $attributes;

    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }

    public function addElement(Renderable $element) {
        $this->elements[] = $element;
    }

    private function renderAttributes(): string {
        $rendered = '';
        foreach ($this->attributes as $key => $value) {
            $rendered .= sprintf(' %s="%s"', $key, htmlspecialchars($value));
        }
        return $rendered;
    }

    public function render(): string {
        $formHtml = sprintf('<form%s>', $this->renderAttributes());
        foreach ($this->elements as $element) {
            $formHtml .= $element->render();
        }
        $formHtml .= '</form>';
        return $formHtml;
    }
}


?>