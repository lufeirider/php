
<?php
$img_path = "";
if (isset($_POST['submit'])) {
    if (!move_uploaded_file($_FILES['upload_file']['tmp_name'], __DIR__.'\\'.$_FILES['upload_file']['name'])){
        $img_path = __DIR__.'\\'.$_FILES['upload_file']['name'];
    }
	
}
?>

<div>
    <h3>上传区</h3>
    <form enctype="multipart/form-data" method="post" action="" onsubmit="">
        <p>请选择要上传的图片：<p>
        <input class="input_file" type="file" name="upload_file"/>
        <input class="button" type="submit" name="submit" value="上传"/>
    </form>
	<? echo $img_path;?>
</div>
