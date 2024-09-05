<?php

namespace ManishPareek\Gsuite\Addon;

class Grid extends GoogleModel {

    public $num_columns;

    public $grid_items;


    public function setNumColumns(string $num_columns): self {
        $this->num_columns = $num_columns;

        return $this;
    }

    public function addGridItem(GridItem $gridItem): self {

        $this->grid_items[] = $gridItem;

        return $this;
    }
}
