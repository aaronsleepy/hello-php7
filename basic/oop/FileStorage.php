<?php
require ('StorageInterface.php');

class FileStorage implements StorageInterface
{

    public function put($item)
    {
        echo "saving to file...\n";
    }

    public function collection()
    {
        echo "getting from files...\n";
    }
}
