<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data & Method</title>
</head>
<body>
    <div id="app">
        {{setName('JRM')}}
    </div>
</body>
<script src="script/vue.js"></script>
<script>
new Vue({
    el : "#app",
    data :{
        name : "JIRAMET",
        age : "28",
        gender : "Male"
    },
    methods : {
        getName : function(){
            return this.name
        },
        setName : function(r_name){
            this.name = r_name
            return this.name
        }
    }
})
</script>
</html>