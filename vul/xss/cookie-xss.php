<h2>
</h2>

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
function GetQueryString(a) {
    var t = new RegExp("(^|&)" + a + "=([^&]*)(&|$)")
      , e = window.location.search.substr(1).match(t);
    return null != e ? decodeURI(e[2]) : null
}

record = GetQueryString("record");
if(record!=null)
{
	document.cookie = "record=" + record;
}else{
	for (var cookie_arr = document.cookie.split("; "), i = 0; i < cookie_arr.length; i++) {
		var cookie = cookie_arr[i].split("=");
		if (cookie[0]=='record'){
			$("h2").append(cookie[1]);
		}
	}
}
</script>
