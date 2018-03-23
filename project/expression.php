<h1>表达式</h1>
<div id="expression" class="wrap">
	{{5+5}}<br>
	{{ok?'YES':'NO'}}<br>
	{{message.split('').reverse().join('')}}
	<div v-bind:id="'list-'+id">vue学习</div>
</div> 

<script type="text/javascript">
new Vue({
	el:"#expression",
	data:{
		ok:true,
		message:'vue',
		id:1
	}
})
</script>