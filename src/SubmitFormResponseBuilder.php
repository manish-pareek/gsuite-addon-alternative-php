<?php

namespace ManishPareek\Gsuite\Addon;

class SubmitFormResponseBuilder extends GoogleModel
{
    /** @var SubmitFormResponse */
    public $submit_form_response;

    /**
     * @return SubmitFormResponse
     */
    public function getSubmitFormResponse(): SubmitFormResponse
    {
        return $this->submit_form_response;
    }

    /**
     * @param SubmitFormResponse $submit_form_response
     *
     * @return SubmitFormResponseBuilder
     */
    public function setSubmitFormResponse(SubmitFormResponse $submit_form_response): self
    {
        $this->submit_form_response = $submit_form_response;

        return $this;
    }
}
