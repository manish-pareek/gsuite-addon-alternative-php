<?php

namespace ManishPareek\Gsuite\Addon;

class Grid extends GoogleModel {

    public $columnCount;

    public $items;


    public function setNumColumns(string $num_columns): self {
        $this->columnCount = $num_columns;

        return $this;
    }

    public function addGridItem(GridItem $gridItem): self {

        $this->items[] = $gridItem;

        return $this;
    }
}
