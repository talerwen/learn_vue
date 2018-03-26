<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/vue.min.js"></script>
</head>
<body>
<?php 
$project_name = [
	'component',		// 组件
	'form',			// 表单
	'event',		// 事件
	'circulation',	// 循环 
	'condition',	// 条件
	'directive',	// 指令
	'expression'	// 表达式
];
$dir='./project/';
foreach($project_name as $v){
	include_once $dir.$v.'.php';
}
?>

</body>
</html>