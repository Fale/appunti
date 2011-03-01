<?php
class file
{
    static function head( $title )
    {
        $o = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $o.= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n";
        $o.= "  \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
        $o.= "<html>\n";
        $o.= "<head>\n";
        $o.= "    <title>" . $title . "</title>\n";
        $o.= "    <style type=\"text/css\" media=\"screen, projection\">\n";
        $o.= "        @import url(\"../style.css\");\n";
        $o.= "    </style>\n";
        $o.= "</head>\n";
        $o.= "<body>\n";

        echo $o;
    }
    
    static function footer()
    {
        $o = "</body>\n";
        $o.= "</html>\n";
        
        echo $o;
    }
}
?>
