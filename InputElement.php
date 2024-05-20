<?php

class InputElement implements Renderable {
    private $type;
    private $name;
    private $value;
    private $attributes;

    public function __construct(string $type, string $name, string $value = '', array $attributes = []) {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->attributes = $attributes;
    }

    private function renderAttributes(): string {
        $rendered = '';
        foreach ($this->attributes as $key => $value) {
            $rendered .= sprintf(' %s="%s"', $key, htmlspecialchars($value));
        }
        return $rendered;
    }

    public function render(): string {
        return sprintf('<input type="%s" name="%s" value="%s"%s>', 
            htmlspecialchars($this->type), 
            htmlspecialchars($this->name), 
            htmlspecialchars($this->value), 
            $this->renderAttributes());
    }
}


?>