<h2>
</h2>

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
function GetQueryString(a) {
    var t = new RegExp("(^|&)" + a + "=([^&]*)(&|$)")
      , e = window.location.search.substr(1).match(t);
    return null != e ? decodeURI(e[2]) : null
}

history_word = GetQueryString("word");
console.log(history_word);
if(history_word!=null)
{
	localStorage.setItem('history',history_word);
}else{
	var hisWords = localStorage.getItem('history');
	$("h2").append(hisWords);
}
</script>
