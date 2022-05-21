<?php

namespace ManishPareek\Gsuite\Addon;

class SuggestionItem extends GoogleModel
{
    /** @var string */
    public $text;

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
     * @return SuggestionItem
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
