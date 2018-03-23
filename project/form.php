<h1>表单</h1>
<div id="form" class="wrap">
	<p>input 元素：</p>
	<input v-model="message_input" placeholder="编辑我......">
	<p>消息是：{{message_input}}</p>

	<p>textarea 元素：</p>
	<p style="white-space:pre">{{message_textarea}}</p>
	<textarea v-model="message_textarea" placeholder="多行文本输入..."></textarea>

	<p>单个复选框；</p>
	<input type="checkbox" id="checkbox" v-model="checked">
	<label for="checkbox">{{checked}}</label>

	<p>多个复选框：</p>
	<input type="checkbox" id="php" value="Php" v-model="checkedNames">
	<label for="php">Php</label>
	<input type="checkbox" id="ruby" value="Ruby" v-model="checkedNames">
	<label for="ruby">Ruby</label>
	<input type="checkbox" id="python" value="python" v-model="checkedNames">
	<label for="python">python</label>
	<br>
	<span>选择的值为：{{checkedNames}}</span>

	<p>单选按钮：</p>
	<input type="radio" id="php" value="Php" v-model="picked">
	<label for="php">Php</label>
	<br>
	<input type="radio" id="java" value="Java" v-model="picked">
	<label for="java">Java</label>
	<br>
	<span>选中值为：{{picked}}</span>

	<p>select列表：</p>
	<select v-model="selected" name="fruit">
		<option value="">选择一个语言</option>
		<option value="Php">Php</option>
		<option value="Java">Java</option>
	</select>
	<div id="output">
		选择的网站是：{{selected}}
	</div>
</div>
<script type="text/javascript">
new Vue({
	el:"#form",
	data:{
		message_input:"Vue",
		message_textarea:"学习vue",
		checked : false,
		checkedNames:['Php'],
		picked:'Php',
		selected:''
	}
})
</script>