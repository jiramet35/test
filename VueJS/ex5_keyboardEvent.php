<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KBEvent</title>
</head>
<body>
    <input type="text" name="txt1" v-on:keyup = "incAge()">
    <div id="cnttxt">
        {{age}}
    </div>
</body>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
</head>
<body>
    <div id="cnttxt">
    <input type="text" v-on:keyup ="inctxtcount()">
        <h1>Text Count : {{cnt}}</h1>
        <br>
        <button v-on:click = "incAge()">Increase Age</button>
        <button v-on:click = "decreAge()">Decrease Age</button>
    </div>
</body>

<script src="script/vue.js"></script>
<script>
new Vue({
    el : "#cnttxt",
    data : {
        name : "JIRAMET I.",
        cnt : 28
    },
    methods : {
        inctxtcount : function(){
            this.cnt++
        },
    }
})
</script>
</html>