<?php

class Book
{
    private int $id = 0;
    private string $title = 'sans titre';

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}