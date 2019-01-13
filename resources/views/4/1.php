<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4-1</title>
</head>
<body>
    <div id="app">
     <div :class="classes"></div>
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                isActive:true,
                error:null
            },
            computed:{
                classes:function(){
                    return{
                        active:this.isActive && !this.error,
                        'text-fail':this.error && this.error.type === 'fail'
                    }
                }
            }
        })
    </script>
</body>
</html>