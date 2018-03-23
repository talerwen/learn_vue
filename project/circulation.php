<h1>循环语句</h1>
<div id="circulation" class="wrap">
	<ol>
		<li v-for="site in sites">
			{{site.name}}
		</li>
	</ol>
	<ul>
		<template v-for="site in sites">
			<li>{{site.name}}</li>
			<li>-------------</li>
		</template>	
	</ul>
	<ul>
		<li v-for="value in object">
			{{value}}
		</li>
	</ul>
	<ul>
		<li v-for="(value,key) in object">
			{{key}} : {{value}}
		</li>
	</ul>
	<ul>
		<li v-for="(value,key,index) in object">
			{{index}}. {{key}} : {{value}}
		</li>
	</ul>
	<ul>
		<li v-for="n in 10">
			{{n}}
		</li>
	</ul>
</div>
<script type="text/javascript">
new Vue({
	el:"#circulation",
	data: {
		sites:[
			{name:"bootstrap"},
			{name:"angular"},
			{name:"vue"}
		],
		object:{
			name:"vue学习",
			url:"http://tongwen.ailiaoka.cn",
			slogan:"不断学习"
		}
	}
});
</script>