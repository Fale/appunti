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
        $o.= "    <script type=\"text/javascript\">\n";
        $o.= "        var _gaq = _gaq || [];\n";
        $o.= "        _gaq.push(['_setAccount', 'UA-147443-14']);\n";
        $o.= "        _gaq.push(['_trackPageview']);\n";
        $o.= "        (function() {\n";
        $o.= "            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
        $o.= "            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
        $o.= "            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
        $o.= "        })();\n";
        $o.= "    </script>\n";
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
