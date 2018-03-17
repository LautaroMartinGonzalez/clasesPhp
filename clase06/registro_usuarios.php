<?php

 ?>

 <div class="formulario">
   <form id='register' action='confirmacion.php' method='post'>
     <div class='short_explanation'>* campos requeridos</div>
     <div class='container'>
         <label for='name' >Nombre completo: </label><br/>
         <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
         <span id='register_name_errorloc' class='error'></span>
     </div>
     <div class='container'>
         <label for='email' >Email:</label><br/>
         <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
         <span id='register_email_errorloc' class='error'></span>
     </div>
     <div class='container'>
         <label for='Edad' >Edad: </label><br/>
         <input type='number' name='edad' id='name' value='' maxlength="50" /><br/>
         <span id='register_name_errorloc' class='error'></span>
     </div>
     <div class='container'>
         <input type='submit' name='Submit' value='Enviar' />
     </div>

   </form>
   

 </div>
