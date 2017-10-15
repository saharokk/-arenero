<html>
<head>
<title>ADC_RPI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">
 <script>  
       
        function show()  
        {  
                        $.ajax({  
                url: "state.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html); 
                }
             }); 
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
        }); 
        
 
 
      </script>
        
    
</head>
    <body>
	<h1 align="center">Raspberry ADC project</h1>
          <div class="r">
          <p class="r1">ADC Voltage</p>
          <div class="r2" style="display:inline-block;">
          <div class="r3" id="content"></div> 
          <div class="r3">V</sup></div>
          </div>
          </div>     
        		<img src="GPIO.png" width="350" height="450">
        		<img src="kpi_0.png" width="480" height="480" align="right">


   </body>
</html> 
