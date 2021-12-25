<?php
require ('Writing.php');

class Wiki extends Writing
{
    protected $title;

    /**
     * @param $title
     */
    public function __construct($title, StorageInterface $storage)
    {
        $this->title = $title;
        $this->storage = $storage;
    }

    public function save()
    {
        echo "saving...\n";

        $this->storage->put([
            'model' => __CLASS__,
            'title' => $this->title
        ]);
    }
}
