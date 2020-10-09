<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>#</th>
			<th>Surname</th>
			<th>#</th>
			<th>Address</th>
			<th>#</th>
			<th>Biography</th>
			<th>#</th>
			<th>Birthday</th>

		</tr>
		<tr>
			<?php $__currentLoopData = $newdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td><?php echo e(++$loop->index); ?></td>
				<td><?php echo e($data); ?></td>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tr>
	</table>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\btuMatePHP\resources\views/guests/table.blade.php ENDPATH**/ ?>