<?php

namespace ManishPareek\Gsuite\Addon;

class AutocompletionResponse extends GoogleModel
{
    /** @var Suggestions */
    public $auto_complete;

    /** @var string */
    public $schema;

    /**
     * @return Suggestions
     */
    public function getAutoComplete(): Suggestions
    {
        return $this->auto_complete;
    }

    /**
     * @param Suggestions $auto_complete
     *
     * @return AutocompletionResponse
     */
    public function setAutoComplete(Suggestions $auto_complete): self
    {
        $this->auto_complete = $auto_complete;

        return $this;
    }

    /**
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }

    /**
     * @param string $schema
     *
     * @return AutocompletionResponse
     */
    public function setSchema(string $schema): self
    {
        $this->schema = $schema;

        return $this;
    }
}
