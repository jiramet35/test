<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Call API</title>
</head>
<body>
    <div id = "el1">
        {{datashow}}
    </div>
</body>
<script src="script/vue.js"></script>
<script src="script/jquery-3.4.1.js"></script>
<script src="script/axios.js"></script>
<script>
new Vue({
    el : "#el1",
    data : {
        datashow : 'tst'
    },
    mounted (){
        axios
        .get('API/json_api.json')
        .then(res => {
            console.log(res.data[0].first_name)
            this.datashow = res.data[0].first_name
        })
    }
})
</script>
</html>