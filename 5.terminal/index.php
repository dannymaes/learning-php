<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Terminal</title>
</head>
<body>

  <form id="terminal" method ="post">
     <input type="text" name="textarea"  id="textarea" onkeypress="test(event)" value="">
  </form>
     <p id="text"></p>

<script>

  function test(event){
    let test = document.getElementById("textarea");
  if (event.keyCode === 13){
     event.preventDefault();
     document.getElementById("text").innerHTML = test.value + "<br>";
     }
  };
</script>
</body>
</html>
