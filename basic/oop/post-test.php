<?php
require ('Post.php');

$post = new Post('foo title');

echo $post->getTitle()."\n";

$post->increment();
$post->increment();
$post->increment();

echo $post->getViewCount()."\n";

$post->setTitle("new title");

echo $post->getTitle()."\n";


require ('Article.php');
$article = new Article('foo title');
echo $article->getTitle()."\n";

require ('Wiki.php');
$wiki = new Wiki('Lorem ipsum..');
echo $wiki->save();
