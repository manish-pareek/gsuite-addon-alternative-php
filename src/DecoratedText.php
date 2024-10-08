<?php

namespace ManishPareek\Gsuite\Addon;

class DecoratedText extends GoogleModel
{
    /** @var string bottom label */
    public $bottom_label;

    /** @var Button */
    public $button;

    /** @var Icon */
    public $icon;

    public $setEndIcon;


    /** @var string */
    public $image_type;

    /** @var string */
    public $text;

    /** @var bool */
    public $wrap_text;

    /** @var string top label */
    public $top_label;

    /** @var SwitchControl */
    public $switch_control;

    /** @var OnClick */
    public $on_click;


    /**
     * @return string
     */
    public function getBottomLabel(): string
    {
        return $this->bottom_label;
    }

    /**
     * @param string $bottom_label
     *
     * @return DecoratedText
     */
    public function setBottomLabel(string $bottom_label): self
    {
        $this->bottom_label = $bottom_label;

        return $this;
    }

    /**
     * @return Button
     */
    public function getButton(): Button
    {
        return $this->button;
    }

    /**
     * @param Button $button
     *
     * @return DecoratedText
     */
    public function setButton(Button $button): self
    {
        $this->button = $button;

        return $this;
    }

    /**
     * @return Icon
     */
    public function getIcon(): string
    {
        return $this->icon;
    }


    /**
     * @param Icon $icon
     *
     * @return DecoratedText
     */
    public function setIcon(Icon $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @param Icon $icon
     *
     * @return DecoratedText
     */
    public function setEndIcon(Icon $icon): self
    {
        $this->endIcon = $icon;

        return $this;
    }



    /**
     * @return bool
     */
    public function getWrapText(): bool
    {
        return $this->wrap_text;
    }

    /**
     * @param bool $wrap_text
     *
     * @return DecoratedText
     */
    public function setWrapText(bool $wrap_text): self
    {
        $this->wrap_text = $wrap_text;

        return $this;
    }

    /**
     * @return string
     */
    public function getTopLabel(): string
    {
        return $this->top_label;
    }

    /**
     * @param string $top_label
     *
     * @return DecoratedText
     */
    public function setTopLabel(string $top_label): self
    {
        $this->top_label = $top_label;

        return $this;
    }

    /**
     * @return SwitchControl
     */
    public function getSwitchControl(): SwitchControl
    {
        return $this->switch_control;
    }

    /**
     * @param SwitchControl $switch_control
     *
     * @return DecoratedText
     */
    public function setSwitchControl(SwitchControl $switch_control): self
    {
        $this->switch_control = $switch_control;

        return $this;
    }

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
     * @return DecoratedText
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageType(): string
    {
        return $this->image_type;
    }

    /**
     * @param string $image_type
     *
     * @return DecoratedText
     */
    public function setImageType(string $image_type): self
    {
        $this->image_type = $image_type;

        return $this;
    }

    /**
     * @return OnClick
     */
    public function getOnClick(): OnClick
    {
        return $this->on_click;
    }

    /**
     * @param OnClick $on_click
     *
     * @return DecoratedText
     */
    public function setOnClick(OnClick $on_click): self
    {
        $this->on_click = $on_click;

        return $this;
    }
}
