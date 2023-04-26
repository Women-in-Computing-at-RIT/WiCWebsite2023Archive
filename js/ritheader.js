<script type="text/javascript">
function focusSearch(formfield){ 
	if (formfield.defaultValue==formfield.value) formfield.value = ""; formfield.className = "focused"; }
function blurSearch(formfield){ 
	if (formfield.value==""){ formfield.value = formfield.defaultValue; formfield.className = "faded";} }
</script>