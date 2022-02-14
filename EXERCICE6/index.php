
<?php 
session_start()
?>
<style> 
    .black {
        background-color: gray;width: 70%;height: 70vh;margin-left: 20%; }</style>   
<form action="controller.php" method="post">
<p><label for="">  valeur de a</label>
 <input type="texte" name="a" id="" value=
  "<?php if (!isset($_SESSION['error']['a']) && isset($_SESSION['post']))
   echo $_SESSION['post']['a']; else '' ?>" > 
   <?php
    if(isset($_SESSION['error']['a'])):?>  
<span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php endif?>
    
</p>
<p><label for="">  valeur de b</label>
    <input type="texte" name="b" id="" value=
    "<?php if (!isset($_SESSION['error']['b']) && isset($_SESSION['post']))
   echo $_SESSION['post']['b']; ?>" > 
   <?php
    if(isset($_SESSION['error']['b'])):?>  
<span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
      <?php endif?>
</p>
<p><label for="">  valeur de c</label>
    <input type="texte" name="c" id="" value=
    "<?php if (!isset($_SESSION['error']['c']) && isset($_SESSION['POST']))
   echo $_SESSION['post']['c']; ?>" > 
   <?php
    if(isset($_SESSION['error']['c'])):?>  
<span style="color:red"><?php echo $_SESSION['error']['c'] ?></span>
      <?php endif?>
</p>
<input type="submit" name="Valider"/>
</form>
