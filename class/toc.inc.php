<?php
class toc
{
    static function toca()
    {
    }
    
    static function l( $n, $t )
    {
        $o = "<h1 id=\"l" . $n . "\">Lezione " . $n . ": " . $t . "</h1>";
        $o.= "<div class=\"t1\"><a href=\"#top\">(top)</a></div>";
        
        echo $o;
    }

    static function l2( $n, $t )
    {
        $o = "<h2 id=\"l" . $n . "\">Lezione " . $n . ": " . $t . "</h2>";
        $o.= "<div class=\"t2\"><a href=\"#top\">(top)</a></div>";
        
        echo $o;
    }

}
?>
