<html>
<body>
<?php

$array = array(
	array("名前"=>"石丸","呼び名"=>"まる"),
	array("名前"=>"篠塚","呼び名"=>"しの")
);

print("<table>");
print("<tr><th>名前</th><th>呼び名</th></tr>");
foreach($array as $key => $user){
	print("<tr>");
	print("<td>".$user["名前"]. "</td>");
	print("<td>".$user["呼び名"]. "</td>");
	print("</tr>");
}
print("</table>");

?>
</body>
</html>
