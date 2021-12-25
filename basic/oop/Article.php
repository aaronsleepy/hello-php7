<?php
//require 'Post.php';
// Fatal error: Cannot declare class Post, because the name is already in use

class Article extends Post
{
    public function getTitle(): string
    {
        return "Article-".parent::getTitle();
    }

}
