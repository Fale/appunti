<?php
class toc
{
    static function show_toc( $f )
    {
        $o = "<h1 id=\"top\">Indice</h1>";
        $o.= "<ol>";

        $ls = file("../" . $f);
        foreach( $ls as $ln => $l )
        {
            preg_match('/t(.?)\(\ ?"(.+)",\ ?"(.+)"\ ?\);/i', $l, $m);
            if ($m)
            {
                if ($m[1])
                {
                    if (!$r[$m[1]])
                    {
                        $o.= "<ol>";
                        $r[$m[1]] = 1;
                        $t++;
                    }
                } else
                    if ($r[$m[1]])
                    {
                        $o.= "</ol>";
                        $r[$m[1]] = 0;
                        $t--;
                    }
                $o.= "<li><a href=\"#t" . $m[2] . "\">" . $m[3] . "</a>";
            }
        }
        for ($j; $j<$t; $j++)
            $o.="</ol>";
        $o.= "</ol>";
        echo $o;
    }
}

function tn( $i, $n, $t )
{
    echo "<h$i id=\"t$n\">Lezione $n: $t</h$i><div class=\"t$i\"><a href=\"#top\">(top)</a></div>";
}

function t( $n, $t ) { tn( "1", $n, $t ); }
function t2( $n, $t ) { tn( "2", $n, $t ); }
function t3( $n, $t ) { tn( "3", $n, $t ); }
function t4( $n, $t ) { tn( "4", $n, $t ); }
function t5( $n, $t ) { tn( "5", $n, $t ); }
function t6( $n, $t ) { tn( "6", $n, $t ); }
function t7( $n, $t ) { tn( "7", $n, $t ); }

?>
