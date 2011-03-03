<?php
class toc
{
    static function show_toc( $f = 0 )
    {
        $o = "<h1 id=\"top\">Indice</h1>\n";
        $o.= "<ol>\n";
        $ls = file($_SERVER[SCRIPT_FILENAME]);
        foreach( $ls as $ln => $l )
        {
            preg_match('/t(.?)\(\ ?"(.+)",\ ?"(.+)"\ ?\);/i', $l, $m);
            if ($m)
            {
                if ($m[1])
                {
                    if (!$r[$m[1]])
                    {
                        $o.= "<ol>\n";
                        $r[$m[1]] = 1;
                        $t++;
                    }
                    for($h=1; $h<7; $h++)
                    {
                        if($r[$m[1] + $h])
                        {
                            $o.= "</ol>\n";
                            $r[$m[1] + $h] = 0;
                            $t--;
                        }
                    }
                } else {
                    for($t; $t>0; $t--)
                        $o.="</ol>\n";
                    $j = 0;
                    $t = 0;
                    $r = NULL;
                }
                $o.= "<li><a href=\"#t" . $m[2] . "\">" . $m[3] . "</a>\n";
            }
        }
        for($t; $t>0; $t--)
                $o.="</ol>\n";
        $o.= "</ol>\n";
        echo $o;
    }
}

class title
{
    static function tn( $i, $n, $t )
    {
        if ( preg_match('/(.+)\/appunti.php/i', $_SERVER[SCRIPT_FILENAME], $m) )
            echo "<h$i id=\"t$n\">Lezione $n: $t</h$i><div class=\"t$i\"><a href=\"#top\">(top)</a></div>";
        else
            echo "<h$i id=\"t$n\">Capitolo $n: $t</h$i><div class=\"t$i\"><a href=\"#top\">(top)</a></div>";
    }
}

function t( $n, $t ) { title::tn( "1", $n, $t ); }
function t2( $n, $t ) { title::tn( "2", $n, $t ); }
function t3( $n, $t ) { title::tn( "3", $n, $t ); }
function t4( $n, $t ) { title::tn( "4", $n, $t ); }
function t5( $n, $t ) { title::tn( "5", $n, $t ); }
function t6( $n, $t ) { title::tn( "6", $n, $t ); }
function t7( $n, $t ) { title::tn( "7  ", $n, $t ); }

?>
