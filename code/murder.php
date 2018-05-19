<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			table{background:#CCC;border:1px solid #000;}
            
	</style>
	<script src="http://127.0.0.1/let's talk/code/jquery-2.2.3.js"></script>
   <link rel="stylesheet" href="http://127.0.0.1/let's talk/code/jquery-ui.css">
   <script src="http://127.0.0.1/let's talk/code/jquery-ui.js"></script>
 <script>
           $(document).ready(function()
           {
                 $('button').on({
                   click:function()
                       {               		
                           var button_value=$(this).attr('value');
               		       $.get("page.php",{"button_detail":button_value},function(data)
               	           {
                                							
                                  $('#Dynamic_table').html("<table cellspacing='10px' style='border:1px solid black'><tr><th>IPC_NUMBER</th><th>IPC_NAME</th><th>Description</th></tr></table>");
               	           		  $('#Dynamic_table').append(data);

								


                            
                         
                         });
               	      
                      }
                  }).button();  

           });
  
</script>
</head>

<body>
     
	     <button value="murder">murder</button>
	     <button value="kidnap">Kidnap</button>
	     <button value="Dowry">Dowry</button>
		 <button value="punishment">punishment</button>
		 <button value="theft">Theft</button>
		 <button value="harrassment">Harrassment</button>


    <div id="Dynamic_table">
     </div>
     
</body>
</html>