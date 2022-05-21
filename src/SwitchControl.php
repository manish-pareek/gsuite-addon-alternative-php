<?php

namespace ManishPareek\Gsuite\Addon;

class SwitchControl extends GoogleModel
{
    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /** @var bool */
    public $selected;

    /** @var Action */
    public $on_change_action;

    /** @var string "enum": [ "SWITCH", "CHECKBOX" ] */
    public $control_type;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return SwitchControl
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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
     * @return SwitchControl
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
     * @return SwitchControl
     */
    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * @return Action
     */
    public function getOnChangeAction(): Action
    {
        return $this->on_change_action;
    }

    /**
     * @param Action $on_change_action
     *
     * @return SwitchControl
     */
    public function setOnChangeAction(Action $on_change_action): self
    {
        $this->on_change_action = $on_change_action;

        return $this;
    }

    /**
     * @return string
     */
    public function getControlType(): string
    {
        return $this->control_type;
    }

    /**
     * @param string $control_type
     *
     * @return SwitchControl
     */
    public function setControlType(string $control_type): self
    {
        $this->control_type = $control_type;

        return $this;
    }
}
