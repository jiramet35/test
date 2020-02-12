<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Call JSON</title>
</head>
<body>
    <div id = "app">
            Fisrtname : {{jdata[0].first_name}} <br>
            Lastname : {{jdata[0].last_name}} <br>
            Age : {{jdata[0].age}} <br>
    </div>
</body>
<script src="script/vue.js"></script>
<script src="script/jquery-3.4.1.js"></script>
<script src="script/axios.js"></script>
<script>
 new Vue({
     el : "#app",
     data :{
         jdata : '',
     },
     mounted (){
         axios
         .get('API/json_api.json')
         .then(res =>{
             console.log(res.data[0].first_name)
             this.jdata = res.data
             console.log(this.jdata)
         })
     }
 })
</script>
</html>