<?php 
class Cms5cd38ff1c26a3948389260_79c226599e6b545b8eae872ddff26d14Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
