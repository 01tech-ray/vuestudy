<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <input type="text" v-model="name" placehold="你的名字">
        {{ date }}
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                date:new Date(),
                name:''
            },
            mounted:function(){
                this.timer=setInterval(() => {
                    this.date=new Date();
                }, 1000);
            },
            beforeDestroy:function(){
                if(this.timer){
                    clearInterval(this.timer);
                }
            }
        })
    </script>
</body>
</html>