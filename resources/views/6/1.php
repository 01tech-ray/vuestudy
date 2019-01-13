<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6-1</title>
    <style>
        [v-cloak]{
            display:none;
        }
    </style>
</head>
<body>
    <div id="app" v-cloak>
        <div>
            <input type="text" name="" id="" v-model="message">
            <p>输入的内容：{{message}}</p>
        </div>
        <div>
            <textarea name="" id="" cols="30" rows="10" v-model="textarea"></textarea>
            <p>输入的内容：{{textarea}}</p>
        </div>
        <div>
            
        </div>
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                message:'',
                textarea:'',
            },
            computed:{
            }
        })
    </script>
</body>
</html>