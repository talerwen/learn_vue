<h1>事件处理器</h1>
<div id="event" class="wrap">
	<button v-on:click="counter += 1">增加 1</button>
	<p>这个按钮被点击了{{counter}}次。</p>
	<button v-on:click="green">Greet</button>
	<button v-on:click="say('hi')">Say hi</button>
	<button v-on:click="say('what')">Say what</button>
	<a onclick="javascript:alert(1);">
		<button v-on:click.stop="doThis" onclick="javascript:alert(2)">停止冒泡</button>
	</a>
</div>
<script type="text/javascript">
	new Vue({
		el:"#event",
		data:{
			counter:0,
			name:'Vue.js'
		},
		methods:{
			green:function(event){
				// `this` 在方法里指当前Vue 实例
				alert('Hello' + this.name + '!')
				// `event` 是原生的DOM 事件
				if(event) {
					alert(event.target.tagName);
				}
			},
			say:function(message){
				alert(message);
			}
		}
	});
</script>