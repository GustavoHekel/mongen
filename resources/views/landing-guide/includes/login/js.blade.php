<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(event){
			event.preventDefault();
			$.post('login', $(this).serialize(), function(data){
				alert('ok');
			})
		})
	});
</script>