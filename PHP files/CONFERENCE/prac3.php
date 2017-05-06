<html>
<body>
<form>

<select id="chkveg" multiple="multiple">

    <option value="Projector">Projector</option>
    <option value="Vedio Conference Setup" >Vedio Conference Setup</option>
    <option value="Staff Service">Staff Service</option>
    <option value="Paper">Paper</option>
    <option value="Sound System" >Sound System</option>
    <option value="Teas/Cofees" />Teas/Cofees</option>
	<option value="Stop Watch" />Stop Watch</option>
	<option value="Translator" />Translator</option>
	<option value="Wifi" />Wifi>Typist</option>
	<option value="Welcome Bouquet" />Welcome Bouquet</option>


	
</select>

<br /><br />

<input type="button" id="btnget" value="Get Selected Values" />

<script type="text/javascript">

$(function() {

    $('#chkveg').multiselect({

        includeSelectAllOption: true
    });

    $('#btnget').click(function(){

        alert($('#chkveg').val());
    });
});

</script>


</form>


</body>
</html>





