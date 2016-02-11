<html>
	<head>
		<title>     </title>
	</head>
	<body>
	<style>
			div.block
			{
				color:black;
				background-color:orange;
				max-width:80px;
				min-width:80px;
				min-height:45px;
				display:inline-block;
				border:1px solid black;
				
				
				
			}
			
			div.space
			{
				
				background-color:white;
				
				max-width:80px;
				min-width:80px;
				min-height:35px;
				display:inline-block;
				
			}
		
	</style>
	<?php
// line star her for c add library on top
    $i;
    
    $n = 13; // i have fixed to 13 line you can ask user inpu ..

    //echo $n;
    
    
     echo "</br>";
     echo "</br>";
     echo "</br>";
	 echo "</br>";
     echo "</br>"; 
     echo "</br>";
     echo "<center>";

    for ($i = $n-1; $i >= 0; $i--)
    {
        
        
        for ($x = $i-1; $x >= 0; $x = $x-1)
        {
            
            echo '<div class="space"></div>';/// this one is blank space
            
        }    
            //echo '<div class="block"></div>';  // Add # in the beginining to make it 2 # // this one will make double #
        //---------------------------------------------------------------------
           for ($y = $i; $y < $n; $y++) 
            {
                
            echo '<div class="block"></div>'; // this one will print #
             }
                echo "</br>"; /// new line /n
    }
   
echo "</center>";

	?>
	
	
	
	</body>
</html>
