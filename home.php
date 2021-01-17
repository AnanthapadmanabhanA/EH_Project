<html>
<head>

<h3>  Welcome <?php echo $_POST['email'];  ?> </h3>
<hr>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

</head>
<body>

<object align= centre>


<div class="info">


<label for="example">Enter Comment
</label>
<input id="example" type="text"name="Ntext" size="20">
<input id="sent" type="submit" value="Post"> 
</div>


<p id="para">      
</p>
</object>

<object align= right>
<form action="" method="GET">
<input type="text" name="q" placeholder="Search User">
<input type="Submit" value="Search">
</form>
</object>

</body>

<script>

window.onclick = function(e)

{   
var id =  e.target.id;   
if (id === 'sent')  
{ var txtbox = document.getElementById('example');  
var txt = txtbox.value;
$( "#para" ).append( txt + '<br>');
$( txtbox ).val('');  

}
}

</script>

</html>
