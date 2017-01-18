<h2>Upload Photo Album</h2>


<form action="upload_multiples" method="POST"  enctype="multipart/form-data">

	<table class= 'table table-striped'>

		<tr><td>Album Title: <td><input type="file" name="album_title" type = 'text'>

		<tr><td>Upload Photos: <td><input type="file" name="photos_uploaded[]" multiple>



	</table>

		<br><input type = 'submit' value = "Upload Photos" class= 'btn btn-info' />

</form>


