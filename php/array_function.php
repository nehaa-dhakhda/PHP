<?php
        echo "<h1>1:sort</h1>";
        $data=array("1","5","3","10");
        sort($data);
        print_r($data);
        echo "<hr>";

        echo "<h1>2:asort(associative array)</h1>";
        $data1=array("html","clanguage","cs","php");
        asort($data1);
        print_r($data1);
        echo "<hr>";

        echo "<h1>3:arsort</h1>";
        $data2=array("91","57","33","109");
        arsort($data2);
        print_r($data2);
        echo "<hr>";

        echo "<h1>4:current</h1>";
        $data4=array("html","clanguage","cs","php");
        echo current($data4);
        echo "<hr>";

        echo "<h1>5:prev</h1>";
        $data5=array("html","clanguage","cs","php");
        echo current($data5)."<br>";
        echo end($data5)."<br>";
        echo "<b>previous:".prev($data5)."</b>";
        echo "<hr>";

        echo "<h1>6:End</h1>";
        $data6=array("html","clanguage","cs","php");
        echo end($data6);
        echo "<hr>";

        echo "<h1>7:shift</h1>";
        $data7=array("html","clanguage","cs","php");
        array_shift($data7);
        print_r($data7);
        echo "<hr>";

        echo "<h1>8:list</h1>";
        $data8=array("html","clanguage","cs","php");
        list($a,$b,$c,$d)=$data8;
        echo $a."<br>".$b;
        echo "<hr>";

        echo "<h1>9:push</h1>";
        $data9=array("html","clanguage","cs","php");
        array_push($data9,"java");
        print_r($data9);
        echo "<hr>";

        echo "<h1>10:pop</h1>";
        $data10=array("html","clanguage","cs","php");
        array_pop($data10);
        print_r($data10);
        echo "<hr>";

        echo "<h1>11:in_array</h1>";
        $data11=array("html","clanguage","cs","php");
        $ia=in_array("html",$data11);
        if($ia==1){
         
               echo" available.....";
        }
        else{
                echo "unavilable.....";
        }

        echo "<hr>";

        echo "<h1>12:search</h1>";
        $data12=array("html","clanguage","cs","php");
        echo array_search("cs",$data12);
        echo "<hr>";

        echo "<h1>13:fill</h1>";
        $a=array_fill(3,5,"html");
        print_r($a);
        echo "<hr>";

        echo "<h1>14:count</h1>";
        $data14=array("html","clanguage","php");
        echo count($data14);
        echo "<hr>";

        
        echo "<h1>15:reverse</h1>";
        $data15=array("html","clanguage","php");
        $a=array_reverse($data15);
        print_r($a);
        echo "<hr>";

        

             
?>