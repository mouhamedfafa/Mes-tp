<?php
session_start()
?>
<form action="controller.php" method="post">
<label for=""> entrer un nombre</label>
<input type="text" name="n" id="" value=" <?php if(!isset($_SESSION['error']['n']) && isset($_SESSION['post'])) 
 echo $_SESSION['post']['n'] ; else '' ?>" >
 <?php if (isset($_SESSION['error']['n'])): ?>
 <span style="color:red" ><?php echo $_SESSION['error']['n']?></span> 
 <?php  endif?>
<input type="submitop" name="btn_ok" id="" value="ok">
</form>