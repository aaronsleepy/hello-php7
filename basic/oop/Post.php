<?php
class Post
{
    protected $title;
    protected $viewCount = 0;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function increment() {
        $this->viewCount += 1;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }
}
