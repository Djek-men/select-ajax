<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="myLibrary.js"></script>
</head>
<body>
<form method="post" action="index.php" name="auto_form">
    <select name="manufactured" onchange="doLoad(this.value);">
        <option selected="selected">------</option>
        <option value="audi">audi</option>
        <option value="bmw">bmw</option>
        <option value="mercedes">mercedes</option>
        <option value="subaru">subaru</option>
    </select>
    <select name="model" id="model"></select>
</form>

</body>
</html>






