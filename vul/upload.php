
<?php
$img_path = "";
if (isset($_POST['submit'])) {
    if (!move_uploaded_file($_FILES['upload_file']['tmp_name'], __DIR__.'\\'.$_FILES['upload_file']['name'])){
        $img_path = __DIR__.'\\'.$_FILES['upload_file']['name'];
    }
	
}
?>

<div>
    <h3>�ϴ���</h3>
    <form enctype="multipart/form-data" method="post" action="" onsubmit="">
        <p>��ѡ��Ҫ�ϴ���ͼƬ��<p>
        <input class="input_file" type="file" name="upload_file"/>
        <input class="button" type="submit" name="submit" value="�ϴ�"/>
    </form>
	<? echo $img_path;?>
</div>
