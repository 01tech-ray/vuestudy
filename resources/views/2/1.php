<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2-1</title>
</head>
<body>
    <div id="app">
        {{ date }}
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                date:new Date()
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