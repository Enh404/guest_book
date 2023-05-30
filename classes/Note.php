<?php

namespace Classes;

class Note
{
    private string $author;
    private string $date;
    private string $comment;
    private Category $category;

    /**
     * @param string $author
     * @param string $date
     * @param string $comment
     * @param Category $category
     */
    public function __construct(string $author, string $date, string $comment, Category $category)
    {
        $this->author = $author;
        $this->date = $date;
        $this->comment = $comment;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }
}
