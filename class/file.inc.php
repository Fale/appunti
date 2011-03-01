<?php
class file
{
    static function head( $title )
    {
        $o = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
        $o.= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"";
        $o.= "  \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">";
        $o.= "<html>";
        $o.= "<head>";
        $o.= "    <title>" . $title . "</title>";
        $o.= "    <style type=\"text/css\" media=\"screen, projection\">";
        $o.= "        @import url(\"../style.css\");";
        $o.= "    </style>";
        $o.= "</head>";
        $o.= "<body>";

        echo $o;
    }
}
?>
