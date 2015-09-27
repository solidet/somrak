<!DOCTYPE html>
<html>
<head>
    <title>form</title>
</head>
<body>
    <form name='f',  method="POST", action="../controllers/home.php">
        Name : <input type='text' , name='name'>
        <input type="submit">
    </form>

</body>
</html>

<?
// echo $data['users']->name;
foreach($data['users'] as $user)
{
    echo $user->name.'</br>';
}


