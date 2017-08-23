<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        ul>li{
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<form action="<?php echo route('contact') ?>" method="post">
	<?php echo csrf_field(); ?>
    <!--    <label>Name:<br>
						<input type="text" name="name">
				</label>
		
				<label for="email">Email:<br><input type="text" name="email"></label>
				<label>Phone:<br><input type="tel" name="phone"></label>
				<label>Company:<br><input type="company" name="company"></label>-->
    <!--{{--<input type="hidden" name="_method" value="PUT">--}}-->
    <ul >
        <li><label for="name">Name: </label>
            <input type="text" name="name"></li>
        <li><label for="email">Email: </label><input type="text" name="email"></li>
        <li><label for="phone">Phone: </label><input type="text" name="phone"></li>
        <li><label for="company">Company: </label><input type="text" name="company"></li>
        <li><label for="message">Message: </label><textarea name="message"></textarea></li>
        <input type="submit">
    </ul>

</form>
</body>
</html>