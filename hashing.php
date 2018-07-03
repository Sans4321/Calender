<html>
<body>
<?php
function create_hash()
{
    //$pwd = $pwd;
    $salt = " -+457fhdkd950dd#%%^*&"  ;
    $hash_md5 = md5($salt.$pwd);
    echo "original password :" .$pwd. "<br>";
    echo "original salt :" .$salt. "<br>";
    echo "MD5 with salt :" .$hash_md5."<br>";

}
create_hash();

?>
</body>
</html>
