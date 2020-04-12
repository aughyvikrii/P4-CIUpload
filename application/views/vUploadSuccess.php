<h1>Demo Upload File</h1>
<br/> File berhasil  diupload
<ul>
<?php
foreach($data as $key => $v){
    echo "<li>$key : $v</li>";
}
?>
</ul>
<h3>Preview</h3>
<img src="<?php echo 'upload_file/'.$data['file_name'] ?>" alt="Hasil upload">