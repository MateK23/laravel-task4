<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="align-items: center; display: flex; justify-content: center;">
	<form action="<?php echo e(route("posttest")); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<p><input type="text" name="name" placeholder="Name"></p>
		<p><input type="text" name="surname" placeholder="Surname"></p>
		<p><input type="text" name="address" placeholder="Address"></p>
		<p><textarea name="biography" cols="30" rows="10" placeholder="Biography"></textarea></p>
		<p><input type="date" name="bday" id="bday" placeholder="Birthday"></p>
		<button>submit</button>
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\btuMatePHP\resources\views/guests/form.blade.php ENDPATH**/ ?>