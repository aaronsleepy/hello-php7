<?php
require ('Writing.php');

class Wiki extends Writing
{
    protected $title;

    /**
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function save()
    {
        echo "saving...";
    }
}
