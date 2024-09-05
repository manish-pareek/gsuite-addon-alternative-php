<?php

namespace ManishPareek\Gsuite\Addon;

class Columns extends GoogleModel {
    /** @var Column[] required */
    public $columnItems;

    /** @var string "enum": [ "START", "CENTER", "END" ] */
    public $wrap_style;

    /**
     * @param Column $column
     *
     * @return Columns
     */
    public function addColumn(Column $column): self {
        $this->columnItems[] = $column;

        return $this;
    }

    /**
     * @param string $wrap_style
     *
     * @return Columns
     */
    public function setWrapStyle(string $wrap_style): self {
        $this->wrap_style = $wrap_style;

        return $this;
    }
}
