<style>
ul{ border:1px solid black; list-style:none; margin:0pt; padding:0pt; float:left; font-family:Arial, Helvetica, sans-serif; font-size:12px; width:300px}
li{ padding:10px 5px ; border-bottom:1px solid black}
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	 {
		$('#choice').change(function(){
			if ($(this).val()!='')
			{$.get('country_data.php',{what:$(this).val()},
			function(data)
			{
				$('#result').html(data);
			});
			}
		});  
    });

</script>
<form>
	<p>Show List of:
    <select id="choice">
    	<option value="">Select</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="india">India</option>
        <option value="pakistan">Pakistan</option>
        <option value="nepal">Nepal</option>
        
    </select>
    </p>
    <p id="result"></p>
</form>