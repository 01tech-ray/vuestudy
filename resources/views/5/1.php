<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5-1</title>
</head>
<body>
    <div id="app">
    <ul>
        <template v-for=" book in books">
            <li>书名：{{book.name}}</li>
            <li>作者： {{ book.author}}</li>
        </template>
     </ul>
     <ul>
        <template v-for=" book in filterBooks">
            <li>书名：{{book.name}}</li>
            <li>作者： {{ book.author}}</li>
        </template>
     </ul>
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                books:[
                    {
                        name:'<Vue.js实战>',
                        author:'梁灏'
                    },
                    {
                        name:'JavaScript',
                        author:'Douglas Crockford'
                    },
                    {
                        name:'JavaScript 高级程序设计',
                        author:'Nicholas C.Zakas'
                    }
                ]
            },
            computed:{
                filterBooks:function(){
                    return this.books.filter(function (book){
                        return book.name.match(/JavaScript/);
                    })
                }
            }
        })
    </script>
</body>
</html>