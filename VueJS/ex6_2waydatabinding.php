<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2 Way Data Binding</title>
</head>
<body>
    
    <div id="twoway">
    Name1 : <input type="text" name="txt1" v-model = "name">
    <hr>
    Name2 : {{name}}
    </div>
</body>
<script src="script/vue.js"></script>
<script>

 new Vue({
     el : "#twoway",
     data : {
         name : "JIRAMET I."
     }
 })

</script>
</html>