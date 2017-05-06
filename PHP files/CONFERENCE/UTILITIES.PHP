<HTML>
<BODY>
<h2>Choose your utilities</h2> 
<form action="#" method="post">
Choose your utilities<br>
<input type="checkbox" name="" value="Pen" />Pen
<br><input type="checkbox" name="check_list[]" value="Paper" />Paper
<br><input type="checkbox" name="check_list[]" value="Mineral Water" />Mineral Water
<br><input type="checkbox" name="check_list[]" value="Projector" />Projector
<br><input type="checkbox" name="check_list[]" value="Vedio Conference Setup" />Vedio Conference Setup
<br><input type="checkbox" name="check_list[]" value="Staff Service" />Staff Service
<br><input type="checkbox" name="check_list[]" value="Sound System" />Sound System
<br><input type="checkbox" name="check_list[]" value="Typist" />Typist
<br><input type="checkbox" name="check_list[]" value="Teas/Cofees" />Teas/Cofees
<br><input type="checkbox" name="check_list[]" value="Stop Watch" />Stop Watch
<br><input type="checkbox" name="check_list[]" value="Translator" />Translator
<br><input type="checkbox" name="check_list[]" value="Wifi" />Wifi
<br><input type="checkbox" name="check_list[]" value="Welcome Bouquet" />Welcome Bouquet
<br><input type="submit" name="formSubmit" value="Submit" />






</form>
</body>
</html>

<?php
if(isset($_POST['formSubmit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
