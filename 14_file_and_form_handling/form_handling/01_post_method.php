

<!-- The following shows a form with an input element: -->
<form action="form.php" method="post">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />
    </div>
    <button type="submit">Submit</button>
</form>


<?php
// In the form.php file, you can access the email value as follows:
if (isset($_POST['email'])) {
	var_dump($_POST['email']);
}