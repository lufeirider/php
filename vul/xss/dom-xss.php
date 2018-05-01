<script>
	var s=location.search;
		s=s.substring(1,s.length);
	var url="";
	if(s.indexOf("url=")>-1){
		var pos=s.indexOf("url=")+4;
		url=s.substring(pos,s.length); //<--得到地址栏里的url参数
		document.write("url: <a href='"+decodeURI(url)+"'>11111111</a>");
	}else{
		url="我是地址栏里的url参数";
	}

</script>