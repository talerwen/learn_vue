<h1>条件语句</h1>
<div id="condition" class="wrap">
	<p v-if="seen">现在你看到我了</p>
	<template v-if="ok">
		<p>我是模板啊</p>
	</template>
	<div v-if="Math.random() > 0.5">
		Sorry
	</div>
	<div v-else>
		Not sorry
	</div>
	<div v-if="type === 'A'">
		A
	</div>
	<div v-else-if="type === 'B'">
		B
	</div>
	<div v-else-if="type === 'C'">
		C
	</div>
	<div v-else>
		Not A/B/C
	</div>
	<h1 v-show="ok">Hello!</h1>
</div>
<script type="text/javascript">
new Vue({
	el:'#condition',
	data:{
		seen:true,
		ok:true,
		type:"C"
	}
});
</script>