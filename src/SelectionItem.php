<?php

namespace ManishPareek\Gsuite\Addon;

class SelectionItem extends GoogleModel
{
    /** @var string */
    public $text;

    /** @var string */
    public $value;

    /** @var bool */
    public $selected;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return SelectionItem
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return SelectionItem
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }

    /**
     * @param bool $selected
     *
     * @return SelectionItem
     */
    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;

        return $this;
    }
}
