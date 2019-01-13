<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3-1</title>
</head>
<body>
    <div id="app1">
        {{text}}
    </div>
    <div id="app2">
        {{ reverseText }}
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app1 = new Vue({
            el:'#app1',
            data:{
                text:'123,456'
            },
            
        })

        var app2 = new Vue({
            el:'#app2',
            computed:{
                reverseText:function(){
                   return app1.text.split(',').reverse().join(',');
                }
            }
        })
    </script>
</body>
</html>