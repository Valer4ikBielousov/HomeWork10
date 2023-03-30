<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Make money</title>
</head>
<body>
<div class="block">
    <form action="server.php" method="post" enctype="multipart/form-data">
            <div class="form-input-statement">
                <label>Your statement (many file)</label><br>
                <input type="file" name="statement[]" multiple>
            </div>
        <div class="form-input-statement">
                <label>Your statement (one files)</label><br>
                <input type="file" name="statements" >
            </div>
            <div class="form-input-send">
                <label>Send your wishes to God</label><br>
                <input type="submit">
            </div>
    </form>
</div>
</body>
</html>
