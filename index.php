<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form methode = "POST" action = "index.php">
       <?php
       $error = false;
       $x_win = false;
       $o_win = false;
       $count = 0;
       session_start();

// Check if player IPs are set
if (!isset($_SESSION['player1_ip'])) {
    $_SESSION['player1_ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['player2_ip'] = '';
}
       for ($id = 1; $id <= 100; $id++)
       {
        if ($id == 11 or $id == 21 or $id == 31 or $id == 41 or $id == 51 or $id == 61 or $id == 71 or $id == 81 or $id == 91) print"<br>";
        print"<input name = $id type = text size =8";
        if (isset($_POST['submit']) and !empty($_POST[$id]))
        {
            if($_POST[$id] == "x" or $_POST[$id] == "o")
            {
            $count+=1;     
            print  "value = ".$_POST[$id]."";
            for($a = 1, $b = 2, $c = 3, $d = 4, $e = 5, $f = 6, $g = 7, $h = 8, $i = 9, $j = 10; $a<= 91, $b<= 92, $c<= 93, $d<= 94, $e<= 95, $f<= 96, $g<= 97, $h<= 98, $i<= 99, $j<= 100;$a+=10, $b+=10, $c+=10, $d+=10, $e+=10, $f+=10, $g+=10, $h+=10, $i+=10, $j+=10)
            {
                if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c])
                {
                    if($_POST[$a] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$a] == "o")
                    {
                        $o_win = true;
                    }

                }
                if($_POST[$b] == $_POST[$c] and $_POST[$c] == $_POST[$d])
                {
                    if($_POST[$b] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$b] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$c] == $_POST[$d] and $_POST[$d] == $_POST[$e])
                {
                    if($_POST[$c] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$c] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$d] == $_POST[$e] and $_POST[$e] == $_POST[$f])
                {
                    if($_POST[$d] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$d] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$e] == $_POST[$f] and $_POST[$f] == $_POST[$g])
                {
                    if($_POST[$e] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$e] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$f] == $_POST[$g] and $_POST[$g] == $_POST[$h])
                {
                    if($_POST[$f] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$f] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$g] == $_POST[$h] and $_POST[$h] == $_POST[$i])
                {
                    if($_POST[$g] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$g] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$h] == $_POST[$i] and $_POST[$i] == $_POST[$j])
                {
                    if($_POST[$h] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$h] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
            }
            for($a = 1, $b = 11, $c = 21, $d = 31, $e = 41, $f = 51, $g = 61, $h = 71, $i = 81, $j = 91; $a<= 10, $b<= 20, $c<= 30, $d<= 40, $e<= 50, $f<= 60, $g<= 70, $h<= 80, $i<= 90, $j<= 100; $a+=1, $b+=1, $c+=1, $d+=1, $e+=1, $f+=1, $g+=1, $h+=1, $i+=1, $j+=1)
            {
                if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c])
                {
                    if($_POST[$a] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$a] == "o")
                    {
                        $o_win = true;
                    }

                }
                if($_POST[$b] == $_POST[$c] and $_POST[$c] == $_POST[$d])
                {
                    if($_POST[$b] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$b] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$c] == $_POST[$d] and $_POST[$d] == $_POST[$e])
                {
                    if($_POST[$c] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$c] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$d] == $_POST[$e] and $_POST[$e] == $_POST[$f])
                {
                    if($_POST[$d] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$d] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$e] == $_POST[$f] and $_POST[$f] == $_POST[$g])
                {
                    if($_POST[$e] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$e] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$f] == $_POST[$g] and $_POST[$g] == $_POST[$h])
                {
                    if($_POST[$f] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$f] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$g] == $_POST[$h] and $_POST[$h] == $_POST[$i])
                {
                    if($_POST[$g] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$g] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$h] == $_POST[$i] and $_POST[$i] == $_POST[$j])
                {
                    if($_POST[$h] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$h] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
            }
            for($a = 1, $b = 12, $c = 23, $d = 34, $e = 45, $f = 56, $g = 67, $h = 78, $i = 89, $j = 100; $a<= 91, $b<= 92, $c<= 93, $d<= 94, $e<= 95, $f<= 96, $g<= 97, $h<= 98, $i<= 99, $j<= 100;$a+=10, $b+=10, $c+=10, $d+=10, $e+=10, $f+=10, $g+=10, $h+=0, $i+=10, $j+=10)
            {
                if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c])
                {
                    if($_POST[$a] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$a] == "o")
                    {
                        $o_win = true;
                    }

                }
                if($_POST[$b] == $_POST[$c] and $_POST[$c] == $_POST[$d])
                {
                    if($_POST[$b] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$b] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$c] == $_POST[$d] and $_POST[$d] == $_POST[$e])
                {
                    if($_POST[$c] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$c] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$d] == $_POST[$e] and $_POST[$e] == $_POST[$f])
                {
                    if($_POST[$d] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$d] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$e] == $_POST[$f] and $_POST[$f] == $_POST[$g])
                {
                    if($_POST[$e] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$e] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$f] == $_POST[$g] and $_POST[$g] == $_POST[$h])
                {
                    if($_POST[$f] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$f] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$g] == $_POST[$h] and $_POST[$h] == $_POST[$i])
                {
                    if($_POST[$g] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$g] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$h] == $_POST[$i] and $_POST[$i] == $_POST[$j])
                {
                    if($_POST[$h] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$h] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
            }
            for($a = 91, $b = 82, $c = 73, $d = 64, $e = 55, $f = 46, $g = 37, $h = 28, $i = 19, $j = 10; $a<= 1, $b<= 2, $c<= 3, $d<= 4, $e<= 5, $f<= 6, $g<= 7, $h<= 8, $i<= 9, $j<= 10;$a-=10, $b-=10, $c-=10, $d-=10, $e-=10, $f-=10, $g-=10, $h-=10, $i-=10, $j-=10)
            {
                if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c])
                {
                    if($_POST[$a] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$a] == "o")
                    {
                        $o_win = true;
                    }

                }
                if($_POST[$b] == $_POST[$c] and $_POST[$c] == $_POST[$d])
                {
                    if($_POST[$b] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$b] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$c] == $_POST[$d] and $_POST[$d] == $_POST[$e])
                {
                    if($_POST[$c] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$c] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$d] == $_POST[$e] and $_POST[$e] == $_POST[$f])
                {
                    if($_POST[$d] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$d] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$e] == $_POST[$f] and $_POST[$f] == $_POST[$g])
                {
                    if($_POST[$e] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$e] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$f] == $_POST[$g] and $_POST[$g] == $_POST[$h])
                {
                    if($_POST[$f] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$f] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$g] == $_POST[$h] and $_POST[$h] == $_POST[$i])
                {
                    if($_POST[$g] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$g] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
                if($_POST[$h] == $_POST[$i] and $_POST[$i] == $_POST[$j])
                {
                    if($_POST[$h] == "x")
                    {
                        $x_win = true;
                    }
                    elseif($_POST[$h] == "o")
                    {
                        $o_win = true;
                    }
                    
                }
            
            }
        }
            else
            {
                $error = true;
            }
        }
        else 
        {
            print">";
        }
       }
       ?> 
       <p><input name = "submit" type = "submit"></p>
    </form>
    <?php
    if($o_win)
    {
        print "player o wins! <br> CONGRATULATIONS";
    }
    elseif($x_win)
    {
        print "player x wins! <br> CONGRATULATIONS";
    }
    elseif($count == 100 and !$o_win and !$x_win)
    {
        print"Draw";
    }
    else
    {
        print"enter x or o";
    }
    ?>
</body>
</html>