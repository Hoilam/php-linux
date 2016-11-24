<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
            <title></title>
            <script src="jquery-2.2.3.js" type="text/javascript"></script>
        <meta>
    </head>
<body>
<?php
    header("content-style:text/html;charset=utf-8");
    $str = "";
    $rand = mt_rand(1000,9999);
    $str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).',
        '.mt_rand(0,255).');">'.mt_rand(0,9).'<span>';
    $str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).',
        '.mt_rand(0,255).');">'.mt_rand(0,9).'<span>';
    $str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).',
        '.mt_rand(0,255).');">'.mt_rand(0,9).'<span>';
    $str.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).',
        '.mt_rand(0,255).');">'.mt_rand(0,9).'<span>';
?>

<label for="check">请输入验证码：</label>
<div id="hiddent_var" style="display: none;"><?php echo $str?></div>
<input type="text" name="check" id="check_val"/><?php echo $str;?>
<br/>

<input type="button" onclick="javascript:check();" value="提交"/>

<script>
    function check(){
        var v1 =$("#hiddent_var").text();
        v1 =v1*1;
        var v2 = $("#check_var").val();
        v2 = v2*1;
        if(v1==v2){
           ;;;;;;;;;;;; alert('ok');
        }else{
            alert('false');
        }
    }
</script>




</body>


</html>