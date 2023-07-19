<?php

abstract class Posting
{
    public function __construct(protected array $data)
    {
    }

    public function getPostingNumber(): string
    {
        return $this->data['posting_number'];
    }
}