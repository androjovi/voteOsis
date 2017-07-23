<?php
include 'php/lib.php';
cekSesi();
mobileFirst();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Polling Osis</title>
     <style>
     .row{
       margin:5px;
       padding: 5px;
     }
     </style>
     <?php css("css/bootstrap.min.css"); mobileFirst(); ?>
   </head>
   <body>
     <div class="row">
       <div class="col-sm-6 col-md-4">
         <div class="thumbnail">
           <img src="img/1.jpg" alt="...">
           <div class="caption">
             <h3>Thumbnail label</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <p><a href="pilih.php?no=satu" class="btn btn-primary" role="button">Pilih</a></p>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/2.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="pilih.php?no=dua" class="btn btn-primary" role="button">Pilih</a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/3.jpg" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="pilih.php?no=tiga" class="btn btn-primary" role="button">Pilih</a></p>
      </div>
    </div>
  </div>
</div>
   </body>
 </html>
