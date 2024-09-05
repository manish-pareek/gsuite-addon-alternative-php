<?php

namespace ManishPareek\Gsuite\Addon;

class GridItem extends GoogleModel {
    /** @var string bottom label */
    public $layout;

    /** @var Title */
    public $title;

    /** @var Subtitle */
    public Subtitle;

    /** @var string */
    public $image_type;

    /** @var string */
    public $text;

    /** @var bool */
    public $text_align;

    /** @var string top label */
    public $image;

    /** @var SwitchControl */
    public $switch_control;

    /** @var OnClick */
    public $on_click;

    /**
     * @return string
     */
    public function getLayout(): string {
        return $this->layout;
    }


    public function setLayout($layout): self {
        $this->layout = $layout;

        return $this;
    }


    /**
     * @param Title $title
     */
    public function setTitle(Title $title): self {
        $this->title = $title;

        return $this;
    }


    /**
     * @param Subtitle Subtitle
     *
     * @return DecoratedText
     */
    public function setSubtitle(Subtitle Subtitle): self {
        $this->icon = Subtitle;

        return $this;
    }


    /**
     * @param bool $text_align
     *
     * @return DecoratedText
     */
    public function setTextAlign($text_align): self {
        $this->text_align = $text_align;

        return $this;
    }

    /**
     * @param string $image
     *
     * @return DecoratedText
     */
    public function setImage($image): self {
        $this->top_label = $image;

        return $this;
    }
}
