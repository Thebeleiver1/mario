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

    $i;
    
    $n = 13;

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
            
            echo '<div class="space"></div>';
            
        }    
            //echo '<div class="block"></div>';  // Add # in the beginining to make it 2 #
        //---------------------------------------------------------------------
           for ($y = $i; $y < $n; $y++) 
            {
                
            echo '<div class="block"></div>';
            
             }
                echo "</br>";
    }
   
echo "</center>";

	?>
	
	
	
	</body>
</html>