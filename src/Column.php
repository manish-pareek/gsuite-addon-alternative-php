<?php

namespace ManishPareek\Gsuite\Addon;

class Column extends GoogleModel {
    /** @var Widget[] required */
    public $widgets;

    /** @var string "enum": [ "START", "CENTER", "END" ] */
    public $horizontal_alignment;

    /** @var string "enum": [ "TOP", "CENTER", "BOTTOM" ] */
    public $vertical_alignment;

    /** @var string "enum": [ "FILL_AVAILABLE_SPACE", "FILL_MINIMUM_SPACE" ] */
    public $horizontal_size_style;

    /**
     * @param Widget $widget
     *
     * @return Column
     */
    public function addWidget(Widget $widget): self {
        $this->widgets[] = $widget;

        return $this;
    }

    /**
     * @param string $horizontal_alignment
     *
     * @return Column
     */
    public function setHorizontalAlignment(string $horizontal_alignment): self {
        $this->horizontal_alignment = $horizontal_alignment;

        return $this;
    }

    /**
     * @param string $vertical_alignment
     *
     * @return Column
     */
    public function setVerticalAlignment(string $vertical_alignment): self {
        $this->vertical_alignment = $vertical_alignment;

        return $this;
    }

    /**
     * @param string $horizontal_size_style
     *
     * @return Column
     */
    public function setHorizontalSizeStyle(string $horizontal_size_style): self {
        $this->horizontal_size_style = $horizontal_size_style;

        return $this;
    }

}
