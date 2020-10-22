<html>
<head>
<script src="ckeditor.js"></script> 
</head>
<form method = "POST">
<textarea id = "editor" name = "editooorrr">
    <p> Здесь идет начальное содержание редактора. </ p>
</textarea>
<input type = "submit" value = "Отправка">
</form>
<script>
ClassicEditor
    .create (document.querySelector ('#editor'))
    .then (editor => {
        console.log('редактор');
    })
    .catch (error => {
        console.error (ошибка);
    });

</script>
<?php

$text = str_replace ('<', '<br> &lt;', $_POST['editooorrr']);
$text = str_replace ('>', '&gt;<br>', $text);
echo $text;


?>
</html>
