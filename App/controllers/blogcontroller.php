<?php
class blogcontroller
{
    function blog_index()
    {
        include_once 'app/views/blog/blog_index.php';
    }
    public function blogdetails()
    {
        include_once 'app/views/blog/blogdetails.php';
    }
}
?>