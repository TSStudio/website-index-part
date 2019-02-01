<script>
var start = 0;
var step = -1;
function count()
{
	document.getElementById("div1").innerHTML = start;
	start += step;
	if(start < 0)
		start = 0;
	setTimeout("count()",1000);
}
window.onload = count;
</script>
<?php
$id=$_GET['id'];
function chkurl($url){
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);//设置超时时间
    curl_exec($handle);
    //检查是否404
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    if($httpCode == 404) {
        return false;
    }else{
        return true;
    }
    curl_close($handle);
}
$url="http://www.tmysam.top/".$id."/";
echo '您访问的是http://'.$id.'.tmysam.top/<br>';
if(chkurl($url)==true){
    echo "您所访问的页面存在<br>";
    $url="Refresh:0;url=http://www.tmysam.top/".$id."/";
    header($url);
    echo '页面将在';
    echo '<span id="div1"></span>';
    echo '秒后跳转';
}else{
    echo "您所访问的页面不存在<br>";
    echo '<a href="http://www.tmysam.top/'.$id.'/">点我</a>';
    echo '强行跳转';
}
?>