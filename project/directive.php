<h1>指令</h1>
<div id="directive" class="wrap">
	<p v-if="seen">现在你看到我了</p>
	<a v-bind:href="url">童文的博客</a>
	<button v-on:click="popUpWindows">弹出message的内容</button><br/>
	message的内容为:<input v-model="message"><br/>
	将message的首字母转化为大写字母显示出来 {{message | capitalize }} <br>
	将message倒转后首字母转化为大写字母显示出来 {{message | reverse | capitalize }} <br>
	将message首字母转化为大写字母再追加元素并显示出来 {{message | capitalizeAndAppend('~~我是后面加上来的',footer) }} <br>
</div>
<script type="text/javascript">
new Vue({
	el:'#directive',
	data: {
		seen:true,
		url:'http://tongwen.ailiaoka.cn',
		message:'vue',
		footer:':end!'
	},
	methods:{
		popUpWindows:function(event){
			alert(this.message);
		}

	},
	filters:{
		capitalize: function(value){
			if(!value) return '';
			value = value.toString();
			return value.charAt(0).toUpperCase() + value.slice(1);
		},
		reverse: function(value){
			if(!value) return '';
			value = value.toString();
			return value.split('').reverse().join('');
		},
		capitalizeAndAppend: function(value,str,expression){
			if(!value) return '';
			value = value.toString();
			return value.charAt(0).toUpperCase() + value.slice(1) + str + expression;
		}
	}
});
</script>