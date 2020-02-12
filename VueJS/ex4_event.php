<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
</head>
<body>
    <div id="appevent">
        <h1>Age : {{age}}</h1>
        <br>
        <button v-on:click = "incAge()">Increase Age</button>
        <button v-on:click = "decreAge()">Decrease Age</button>
    </div>
</body>
<script src="script/vue.js"></script>
<script>
new Vue({
    el : "#appevent",
    data : {
        name : "JIRAMET I.",
        age : 28
    },
    methods : {
        incAge : function(){
            return this.age++
        },
        decreAge : function(){
            return this.age--
        }
    }
})
</script>
</html>