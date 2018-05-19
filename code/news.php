<html>
<head>
<title></title>

 
	 <script src="http://127.0.0.1/let's talk/code/jquery-2.2.3.js"></script>
   <link rel="stylesheet" href="http://127.0.0.1/let's talk/code/jquery-ui.css">
   <script src="http://127.0.0.1/let's talk/code/jquery-ui.js"></script>

  <link rel="stylesheet" href="http://127.0.0.1/let's talk/code/Keyboard-master/css/keyboard.css"></script>
  <script src="http://127.0.0.1/let's talk/code/Keyboard-master/js/jquery.keyboard.js"></script>
  <script src="http://127.0.0.1/let's talk/code/Keyboard-master/js/jquery.keyboard.extension-typing.js"></script>
  
  <script src="http://127.0.0.1/let's talk/code/Keyboard-master/layouts/hindi.js"></script>
   
   
 
   
   <script>
       $(document).ready(function(){

               $('#t1').keyboard({
                      layout:'hindi'
                }); 
               

               $('#lang').change(function()
               {
               	    var selected_lang=$(this).val();
               	     $.get("data.php",{"lang":selected_lang},function(data)
               	     {
                           
                            $('#NewsList').html("<option value=news>News Channel </option>");  
               	            $('#NewsList').append(data);         
                     });
               	      
               });

               $('a').on({
                   click:function()
                       {               		
                         var selected_lang=$('#lang').val();   
               		       var Channel_Name=$('#NewsList').val();

               		       $.get("url.php",{"Channel":Channel_Name,"tblName":selected_lang},function(data)
               	         {
                                              
                            $('#iframe1').attr("src",data);
                         });
               	      
                      }
                  }).button();           
               
            
     
       });
      </script>
       
</head>





<body>
<div id="container" style="position:absolute; background-color:#FFA8A8; height:20%; left:0%;top:0%; width:100%;font-family:verdana; text-align:centre;">  <!--  -->
 <h1><pre>                                    NEWS COLUMN                                              </h1> </pre></div>
 
 
 <div id="container" style=" margin-left:0%; margin-top:10%;width:17%; height:100%; background-color:red;"> 
  <pre>
  
        <form action="searchnews.php" method="post">
             <input type="text" placeholder="news search" size="19" id="t1" name="search" style="padding:10px; margin-left:-70px;">  
             <input type="image" src="images.jpg" style="margin-top:10px; margin-left:-40px;" height="5%" width="18%" alt="Submit"> 
        </form>
     </pre>    
      
	   <div id="container" style=" font-family:courier; margin-left:0%; margin-top:15%;width:100%; height:25%; background-color:pink;"> 
	   <br>
       <pre>   <select id="lang">
               <option value="language">select Language </option>
                <option value="english">English</option>
                <option value="hindi">Hindi</option>    
     </select>  </pre>
	 
	 

         <pre>   <select id="NewsList">
                 <option value="news">News Channel </option></pre>
    </select>

      <a>Read</a><br><br> 
  </div>
			
			 
			 
	  
	
	 <div id="container" style="position:absolute; background-color:purple; height:100%; left:18%;top:20%; width:80%;">
     <iframe id="iframe1" height="100%" width="100% "></iframe>
 	 </div>
	  
	  

  
</div>
</body>
</html>