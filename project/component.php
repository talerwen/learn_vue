<h2>组件</h2>
<div id="component">
	<selfcomponent></selfcomponent>
	<othercomponent></othercomponent>
</div>
<script type="text/javascript">
Vue.component('selfcomponent',{
	template:'<h1>自定义组件！</h1>'
});
var Child = {
	template: '<h1>我是另外的自定义组件！</h1>'
}
new Vue({
	el:'#component',
	components:{
		'othercomponent':Child
	}
})
</script>