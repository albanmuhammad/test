<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="process.php" enctype="multipart/form-data">
        <table align="center" width="270" border="1">
            <tr>
                <td width="94">User ID</td>
                <td width="9">:</td>
                <td width="145"><input name="userid" type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="pass" type="password"></td>
            </tr>
            <tr>
                <td>Filename</td>
                <td>:</td>
                <td> <input type="file" name="userfile" /></td>
            </tr>
            <tr>
                <td> <input type="submit" name="upload" value="Upload" /></td>
            </tr>

        </table>
    </form>
</body>

</html>