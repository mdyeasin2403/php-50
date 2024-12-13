<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="cm">
		<?php
           
        echo "<h1>Examle-1</h1>";

          $a = "string";
          //function callName(){
            
          //$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];


          //}
          //callName();
           echo "<h1>" . $a . "</h1>";
           var_dump($a);
           echo "<hr>";


           echo "<h1>Examle-2</h1>";

           $b = 100;

           echo "<h1>" . $b . "</h1>";
           var_dump($b);
           echo "<hr>";



           echo "<h1>Examle-3</h1>";

           $c = true;

           echo "<h1>" . $c . "</h1>";
           var_dump($c);
           echo "<hr>";

       


           echo "<h1>Examle-4</h1>";

           $d = false;

           echo "<h1>" . $d . "</h1>";
           var_dump($d);
           echo "<hr>";



           echo "<h1>Examle-5</h1>";

           $d = array("Yeasin","Amir","Sajid");

           echo "<h1>" . $d[0] . "</h1>";
           var_dump($d);
           echo "<hr>";


          echo "<h1>Examle-6</h1>";

          $e = array("Yeasin" => 0,"Amir" => 1,"Sajid => 2");

          echo "<h1>" . $e["Amir"] . "</h1>";
          var_dump($e);
          echo "<hr>";


          echo "<h1>Examle-7</h1>";

          $n1 = 20;
          $n2 = 30;

          $number = $n1 + $n2;

          echo "<h1>" . $number . "</h1>" ."<hr>";



          echo "<h1>Examle-8</h1>";

          $n3 = 10;
          $n4 = 20;

          $n3 += $n4;

          echo "<h1>" . $n3 . "</h1>" ."<hr>";


          echo "<h1>Examle-9</h1>";

          $n5 = 10;
          $n6 = 10;

          if ($n5==$n6) {
          	echo "Equal";
          }else{
          	echo "Not Equal";
          }

          echo "<hr>";


          echo "<h1>Examle-10</h1>";

          $n7 = 10;
          $n8 = 10;

          if ($n7===$n8) {
          	echo "Identical";
          }else{
          	echo "Not Identical";
          }

          echo "<hr>";


          echo "<h1>Examle-11</h1>";

          $n9 = 7;
          $n10 = 10;

          if ($n9===$n10) {
          	echo "Identical";
          }elseif ( $n9<$n10) {
          	echo "Small";
          }
          else{
          	echo "Not small";
          }

          echo "<hr>";


          echo "<h1>Examle-12</h1>";

          $e1 = 7;
          $e2 = 10;
          $e3 = 20;
          $e4 = 40;

          if ($e1 < $e2 OR $e3 < $e4){
          	echo "Yes";
          }elseif ( $e1 > $e2 OR $e3 > $e4){
          	echo "No";
          }
          else{
          	echo "Other";
          }

          echo "<hr>";


          echo "<h1>Examle-13</h1>";

          $n3 = 7;
          $n4 = 10;
          $n5 = 20;
          $n6 = 40;

          if ($n3 < $n4 AND $n5 > $n6){
          	echo "Yes";
          }elseif ( $n3 > $n4 AND $n5 > $n6){
          	echo "No";
          }
          else{
          	echo "Other";
          }
          echo "<hr>";


          echo "<h1>Examle-14</h1>";
          
          $data = "Hello world";
          echo chunk_split($data,4,"...");
          echo "<hr>";


          echo "<h1>Examle-15</h1>";

          $data1 = "Hello world";
          echo "$data1". "<br>";
          print_r(explode(" ", $data1));
          echo "<hr>";

          echo "<h1>Examle-16</h1>";

          $data2 = "md5 string";
          echo md5($data2);
          echo "<hr>";

          echo "<h1>Examle-17</h1>";

          $data3 = "str";
          echo str_repeat($data3, 3);
          echo "<hr>";

          echo "<h1>Examle-18</h1>";

          $e5 = 100;  
          $e6 = "100";
          var_dump($e5 != $e6);
          echo "<hr>";

          echo "<h1>Examle-19</h1>";

          $e7 = 100;  
          $e8 = "100";
          var_dump($e7 <> $e8);
          echo "<hr>";

          echo "<h1>Examle-20</h1>";

          $e9 = 100;  
          $e10 = "100";
          var_dump($e9 !== $e10);
          echo "<hr>";

          echo "<h1>Examle-21</h1>";

          $f1 = 100;  
          $f2 = 50;
          var_dump($f1 > $f2);
          echo "<hr>";

          echo "<h1>Examle-22</h1>";

          $f3 = 10;  
          $f4 = 50;
          var_dump($f3 < $f4);
          echo "<hr>";

          echo "<h1>Examle-23</h1>";

          $f5 = 50;  
          $f6 = 50;
          var_dump($f5 >= $f6);
          echo "<hr>";

          echo "<h1>Examle-24</h1>";

          $f7 = 50;  
          $f8 = 50;
          var_dump($f7 <= $f8);
          echo "<hr>";

          echo "<h1>Examle-25</h1>";

          $f9 = 5;  
          $f10 = 10;
          var_dump($f9 <=> $f10);
          echo "<hr>";
       
          echo "<h1>Examle-26</h1>";

          $g1 = 10;  
          echo ++$g1;
          echo "<hr>";

          echo "<h1>Examle-27</h1>";

          $g2 = 10;  
          echo $g2++;
          echo "<hr>";

          echo "<h1>Examle-28</h1>";

          $g3 = 10;  
          echo --$g3;
          echo "<hr>";

          echo "<h1>Examle-29</h1>";

          $g4 = 10;  
          echo $g4--;
          echo "<hr>";

          echo "<h1>Examle-30</h1>";

          $g5 = 100;  
          $g6= 50;

          if ($g5 == 100 and $g6 == 50) {
              echo "Hello world!";
          }
          echo "<hr>";

          echo "<h1>Examle-31</h1>";

          $g7 = 100;  
          $g8= 50;

          if ($g7 == 100 xor $g8 == 80) {
              echo "Hello";
          }
          echo "<hr>";

          echo "<h1>Examle-32</h1>";

          $g9 = 100;  
          $g10= 50;

          if ($g9 == 100 && $g10 == 50) {
              echo "Hello";
          }
          echo "<hr>";

          echo "<h1>Examle-33</h1>";

          $h1 = 100;  
          $h2= 50;

          if ($h1 == 100 || $h2 == 80) {
              echo "Hello";
          }
          echo "<hr>";

          echo "<h1>Examle-34</h1>";

          $h3 = 100;  

          if (!($h3 == 90)) {
              echo "Hello world!";
          }
          echo "<hr>";

          echo "<h1>Examle-35</h1>";

          $txt1 = "Hello";
          $txt2 = " world!";
          $txt1 .= $txt2;
          echo $txt1;
          echo "<hr>";

          echo "<h1>Examle-36</h1>";

          $h4 = array("a" => "red", "b" => "green");  
          $h5 = array("c" => "blue", "d" => "yellow");  
          print_r($h4 + $h5);
          echo "<hr>";

          echo "<h1>Examle-37</h1>";

          $h6 = array("a" => "red", "b" => "green");  
          $h7 = array("c" => "blue", "d" => "yellow");  
          var_dump($h6 == $h7);
          echo "<hr>";

          echo "<h1>Examle-38</h1>";

          $h8 = array("a" => "red", "b" => "green");  
          $h9 = array("c" => "blue", "d" => "yellow");  
          var_dump($h8 === $h9);
          echo "<hr>";

          echo "<h1>Examle-39</h1>";

          $i1 = array("a" => "red", "b" => "green");  
          $i2 = array("c" => "blue", "d" => "yellow");  
          var_dump($i1 != $i2);
          echo "<hr>";

          echo "<h1>Examle-40</h1>";

          $i3 = array("a" => "red", "b" => "green");  
          $i4 = array("c" => "blue", "d" => "yellow");  
          var_dump($i3 <> $i4);
          echo "<hr>";

          echo "<h1>Examle-41</h1>";

          $i5 = array("a" => "red", "b" => "green");  
          $i6 = array("c" => "blue", "d" => "yellow");  
          var_dump($i5 !== $i6);
          echo "<hr>";

          echo "<h1>Examle-42</h1>";

          $i7 = "red";

          switch ($i7) {
            case "red":
              echo "Your favorite color is red!";
              break;
            case "blue":
              echo "Your favorite color is blue!";
              break;
            case "green":
              echo "Your favorite color is green!";
              break;
            default:
              echo "Your favorite color is neither red, blue, nor green!";
          }
          echo "<hr>";

          echo "<h1>Examle-43</h1>";

          $i8 = 4;

          switch ($i8) {
            case 6:
              echo "Today is Saturday";
              break;
            case 0:
              echo "Today is Sunday";
              break;
            default:
              echo "Looking forward to the Weekend";
          }
          echo "<hr>";

          echo "<h1>Examle-44</h1>";

          $i9 = 3;

          switch ($i9) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:  
              echo "The week feels so long!";
              break;
            case 6:
            case 0:
              echo "Weekends are the best!";
              break;
            default:
              echo "Something went wrong";
          }
          echo "<hr>";

          echo "<h1>Examle-45</h1>";

          $j1 = 1;

          while ($j1 < 6) {
            echo $j1;
            $j1++;
          } 
          echo "<hr>";

          echo "<h1>Examle-46</h1>";

          $j2 = 0;

          while ($j2 < 6) {
            $j2++;
            if ($j2 == 3) continue;  
            echo $j2;
          } 
          echo "<hr>";

          echo "<h1>Examle-47</h1>";

          $j3 = 1;

          while ($j3 < 6):
            echo $j3;
            $j3++;
          endwhile;
          echo "<hr>";

          echo "<h1>Examle-48</h1>";

          $j4 = 8;

          do {
            echo $j4;
            $j4++;
          } while ($j4 < 6);
          echo "<hr>";

          echo "<h1>Examle-49</h1>";

          $j5 = 0;

          do {
            $j5++;
            if ($j5 == 3) continue;
            echo $j5;
          } while ($j5 < 6);
          echo "<hr>";

          echo "<h1>Examle-50</h1>";

          for ($j6 = 0; $j6 <= 10; $j6++) {
            if ($j6 == 3) break;
            echo "The number is: $j6 <br>";
          }
          echo "<hr>";











		?>
	</div>
</body>
</html>