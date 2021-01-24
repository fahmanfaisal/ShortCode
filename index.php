<!doctype html>

<html>
<head>
   <title> Lear PHP </title>
   <style type="text/css">
       
.hf{
        width:900px;
        margin:0 auto;
        padding: 20px 10px; 
        background:#1e73be; 
        text-align: center; 
        font-weight: bold;
    }    
.content{
        width:900px; 
        margin:0 auto; 
        height:600px;
        background:#e4edf8; 
        padding: 20px 10px; 
        text-align:center;
    }


   </style>
}
}
</head>

<body>
<section>
    <div class="hf">
	<h2>Code Here With Proper Syntex</h2>
        <?php echo "";
		?>
		<hr>	
    </div>
</section>


<section>
    <div class="content">
	    <h4>Shorting Arrays</h4>	 
        <div>
        <?php
        
            $name= array ("jhon", "Rohan" ,"ElderRohan" ,"ElderJhon");
            asort($name);
            $length= count($name);         //shorting arrays in dynamic way!
            for ($i=0; $i <$length ; $i++) { 
                echo $name[$i];
                echo "</br>";
            }
        ?>
        </div>
    
        <h4>PHP Varialble Scope</h4>     
        <div>
        <?php
              $x=15;
            function test1(){              
                global $x;              //global variable
                $a=5;
                echo $a;
                echo "</br>";
                echo "Access form Global vaialble $x";

            }
            function test2(){
                global $x;
                $b=10;
                echo "</br>";
                echo $b;
                echo "</br>";
                echo "Access form Global vaialble $x";

            }
            test1();
            test2();
        ?>
        </div>
 
         <hr>
        <h4>Gobal Variables</h4></hr>
    <P> $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILE
        $_ENV
        $_COOKIE 
        $_SESSION </P> 

        <div>
        <?php 
            $x= 10;
            $y= 20;

            function sum(){
                $GLOBALS ['z'] =  $GLOBALS ['x'] + $GLOBALS ['y'];
            }
            sum();
            echo $z;
            
            echo "</br>";
        ?>
        <?php
            
            echo $_SERVER['PHP_SELF'];
        ?>
        </div>

        <hr>
        <h4>Php Super Globals [$_REQUEST & $_POST]</h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        User Name: <input type="text" name="name">
        <input type="submit" value="Submit">
        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name= $_REQUEST['name'];
            if (empty($name)) {
                echo "Username Field Must Not Be Empty !!";
            } else{
                echo "You Have Submited: ".$name;
            }    
        }
        ?>
    <hr>
    <h4>SuperGlobals Variable [$_GET]</h4>
    <a href="test.php?msg=What Time Is It?&txt=It's Fun Time !!">Sent Data By Super Variables: $_GET</a>

    <?php 

    ?>





    </div>   
</section>
 

<section style="margin-top: 50px;">
    <div class="hf">
        <?php
        echo "Footer";
        ?>
    </div> 

</section>

</body>
</html>
