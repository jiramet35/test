<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Binding</title>
</head>
<body>
    <div id="d_bind">
        Name : <input type="text" v-bind:value="name" readonly><br>
        JOB : <input type="text" v-bind:value="job" readonly>
    </div>
</body>
<script src="script/vue.js"></script>

<script src="script/d_binding.js">
/*new Vue({
    el : "#d_bind",
    data :{
        name : "JIRAMET",
        job : "Computer Officer"
    }

})*/
</script>
</html>