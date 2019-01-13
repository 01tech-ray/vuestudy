<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5-5</title>
    <style>
        table{
            border:1px solid #e9e9e9;
            border-collapse:collapse;
            border-spacing:0;
            empty-cells:show;
        }
        th,td{
            padding:8px 16px;
            border:1px solid #e9e9e9;
            text-align:left;
        }
        th{
            background:#f7f7f7;
            color:#5c6b77;
            font-weight:600;
            white-space:nowrap;
        }
    </style>
</head>
<body>
    <div id="app">
        <template v-if="goods.length !==0">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th><input type="checkbox" @click="handleTotalPic" v-model="totalPic">全选</th>
                        <th>商品名称</th>
                        <th>商品价格</th>
                        <th>购买数量</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(good,index) in goods">
                        <td>{{good.id}}</td>
                        <td><input type="checkbox" v-model="good.chose"name="" id="" @click="good.chose?false:true"></td>
                        <td>{{good.name}}</td>
                        <td>{{good.price}}</td>
                    <td>
                        <button @click="reduce(index)" :disabled="good.count === 1">-</button>
                        {{good.count}}
                        <button @click="add(index)">+</button>
                    </td>
                    <td><button @click="remove(index)">移除</button></td>
                    </tr>
                </tbody>
            </table>
            <div> 总价：{{ totalPrice }}</div>
        </template>
        <div v-else>
            购物车内没有商品
        </div>
    </div>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                totalPic:false,
                goods:[
                    {
                        id:1,
                        name:'iPhone 7',
                        price:6188,
                        count:1,
                        chose:true
                    },
                    {
                        id:2,
                        name:'iPad Pro',
                        price:5888,
                        count:1,
                        chose:true
                    },
                    {
                        id:3,
                        name:'MacBook Pro',
                        price:21488,
                        count:1,
                        chose:true
                    }
                ]
            },
            computed:{
                totalPrice:function(){
                    let totalprice =0;
                    for (let i=0;i<this.goods.length;i++){
                        let item=this.goods[i];
                        if(item.chose){
                            totalprice += item.price*item.count;
                        }
                    }
                    return totalprice;
                }
            },
            methods:{
                add:function(index){
                    // console.log(index);
                    this.goods[index].count++;
                },
                remove:function(index){
                    this.goods.splice(index,1);
                },
                reduce:function(index){
                    this.goods[index].count--;
                },
                handleTotalPic:function(){
                    if(this.totalPic){
                        for(let i=0;i<this.goods.length;i++){
                            this.goods[i].chose=false;
                        }
                    }else{
                        for(let i=0;i<this.goods.length;i++){
                            this.goods[i].chose=true;
                        }
                    }
                }


            }
        })
    </script>
</body>
</html>