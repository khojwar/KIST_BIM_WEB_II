
<!-- the form uses the GET method -->
<form action="form.php" method="get">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />
    </div>
    <button type="submit">Submit</button>
</form>




<?php
// And the following shows the form.php file:

if (isset($_GET['email'])) {
	var_dump($_GET['email']);
}