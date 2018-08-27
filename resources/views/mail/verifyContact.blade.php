<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Verify Your Email Address</h2>

<div>
    Thanks for creating an account with the verification demo app.
    <a href=" <?php echo e(URL::to('verifycontact/' . $code.'?mail='.$mail) );?>">Click here</a> to confirm.
    <?php echo e(URL::to('verifycontact/' . $code.'?mail='.$mail) );?>


</div>

</body>
</html>