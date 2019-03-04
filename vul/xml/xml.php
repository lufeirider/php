<?PHP
header("Content-type:text/html; Charset=utf-8");
$url = "http://127.0.0.1/test.xml";
 
//  加载XML内容
$content = file_get_contents($url);
$content = get_utf8_string($content);
$dom = DOMDocument::loadXML($content);
/*
此处也可使用如下所示的代码，
$dom = new DOMDocument();
$dom->load($url);
 */
 
$elements = $dom->getElementsByTagName("current_conditions");
$element = $elements->item(0);
$condition = get_google_xml_data($element, "condition");
$temp_c = get_google_xml_data($element, "temp_c");
echo '天气：', $condition, '<br />';
echo '温度：', $temp_c, '<br />';
 
function get_utf8_string($content) {    //  将一些字符转化成utf8格式
    $encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));
    return  mb_convert_encoding($content, 'utf-8', $encoding);
}
 
function get_google_xml_data($element, $tagname) {
    $tags = $element->getElementsByTagName($tagname);   //  取得所有的$tagname
 
    $tag = $tags->item(0);  //  获取第一个以$tagname命名的标签
    if ($tag->hasAttributes()) {    //  获取data属性
        $attribute = $tag->getAttribute("data");
        return $attribute;
    }else {
        return false;
    }
}
?>
