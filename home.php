<!DOCTYPE html>
<html>
    <head>
    <title>GLAMSMAKEUP</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />
        <meta charset="utf-8">
		<script src="js/jquery.min.js"></script>
     <link href="css.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="js/jquery.mobile-1.4.3.min.css"  />
	<script src="js/jquery-1.4.3.min.js"></script>
	<script src="js/jquery.mobile-1.4.3.min.js"></script>
    <script src="js/jss.js"></script>
     </head>
    <body >
    
<!-- Accueil -->
<div data-role="page" id="home" >
  <div data-role="header" style="background:#fff"  >
  
  <div style="width:100%; display:block; float:left;background:#fff">
  
   <div style="width:55%; display:block; float:left">
  <img src="images/logo_glams.png" width="50%" />
  </div>
    <div style="width:10%; display:block; float:right">
<a href="#test-panel"   data-role="button" data-mini="true" data-iconpos="notext"   data-icon="search" data-iconpos="left">search</a>
    
  </div>
  </div>
  
  
 
  </div>
  <div data-role="panel" id="test-panel" data-display="overlay" data-position="left" data-theme="c" style="background:#f2F2F2; width:100%; z-index:90000; overflow:hidden" align="center" data-position="fixed">
   
             <div style="display:block; float:left; width:100%; z-index:90000; background:#fff   " align="left"   >
             
             <div style=" width:85%; display:block; float:left; padding-left:3%">
             <p><b>NOS PRODUITS</b></p>
             </div>
             
              <div style=" width:10%; display:block; float:right">
             <a href="#test-panel"   data-role="button" data-mini="true" data-iconpos="notext"   data-icon="delete" data-iconpos="left">Close</a>
             </div>
         </div>
 
        <div style="width:100%;      display:inline; float:left; margin-top:30px" align="center">
       
       <div style="width:43%; height:43%; display:block; float:left; margin-right:7%; margin-bottom:3%">
       <p><a href="vernis.html" data-role="button" data-transition="pop"><img src="images/1p.jpg" width="100%" /></a></p>
       <p style="font-size:11px"><b>Vernis</b></p>
       </div>
       
       <div style="width:43%;   height:43%; display:block; float:left; margin-right:7%; margin-bottom:3%">
        <p><a href="gloss.html" data-role="button" data-transition="pop"><img src="images/3p.jpg" width="100%" /></a></p>
       <p style="font-size:11px"><b>Gloss</b></p>
       </div>
       
       <div style="width:43%; height:43%; display:block; float:left; margin-right:7%; margin-bottom:3%">
        <p><a href="" data-role="button"><img src="images/2p.jpg" width="100%" /></a></p>
       <p style="font-size:11px"><b>Rouge &agrave; l&egrave;vre</b></p>
       </div>
       
       
      
       
       </div>
     
 
    </div>
    <div data-role="footer" data-position="fixed" style="background:#FFF; border:none;   " align="center">
   <div data-role="navbar">
      <ul>
      <!--li><a href="#"    data-icon="home"   data-shadow="false" data-iconshadow="false" data-role="button">Accueil</a></li-->
        <li><a href="#home"  class="ui-btn-active" data-icon="home"   data-shadow="false" data-iconshadow="false" data-role="button">Accueil</a></li>
        <li><a href="#test-panel"  data-icon="grid"   data-shadow="false" data-iconshadow="false" data-role="button" >Produits</a></li>
        <li><a href="#"  data-icon="info"   data-shadow="false" data-iconshadow="false" data-role="button">Astuces</a></li>
        <li><a href="#astuces" data-icon="plus" id="but"   data-shadow="false" data-iconshadow="false" data-role="button" data-transition="">Contacts</a></li>
        
        
      </ul>
    </div>
   </div>
   
   
</div>
 
    <div data-role="page" id="call"    >
      <div data-role="header"  >
        <h1  >GLAM'S</h1>
     
         <a href="#home" data-transition="slide" data-rel="back"   data-iconpos="left"  data-icon="arrow-l"   data-shadow="false" data-iconshadow="false" data-role="button"    data-back-btn-text="BACK"  >BACK</a>
        <!--a href="#right-panel"  data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false"  data-role="button"   >Open right panel</a-->
          
      </div>
    <div data-role="content" align="center">
     <h2>Contactez-nous</h2>
       <div data-role="fieldcontain">
      <p> 
       <input type="text" name="textinput" id="textinput" value=""  /></p>
       <p> 
         <input type="email" name="email" id="email" value=""  /></p>
<p>          <input type="text" name="textinput" id="textinput" value=""  /></p>
 
     </div>
     </div>
      <!--div data-role="footer"   data-position="fixed">
<h2>Présentation</h2>   </div-->
     </div>
    <!--Contacts-->
      
   
    
 </body>
</html>

