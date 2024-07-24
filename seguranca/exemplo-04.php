<?php

?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
</script>

<form action="cadastrar.php" method="POST" id="demo-form">

  <input type="email" name="inputEmail">
  <button class="g-recaptcha" 
        data-sitekey="g" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>

</form>