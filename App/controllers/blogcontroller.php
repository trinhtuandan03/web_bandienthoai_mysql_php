<?php
class blogcontroller
{
    function blog_index()
    {
        include_once 'App/views/blog/blog_index.php';
    }
    public function blogdetails()
    {
        include_once 'App/views/blog/blogdetails.php';
    }
}
?>