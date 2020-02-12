<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex1</title>
</head>
<body>
    <div id="vue1">
        <h1 style="color:red">{{text}}</h1>
    </div>
</body>
<script src="script/vue.js"></script>

<script>
    var v = new Vue({
        el : "#vue1",
        data : {
            text : "Hello Vue.JS"
        }
    })
    
</script>
</html>