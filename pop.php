<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/27
 * Time: 10:46
 */
include "layout_header.php";

?>
<style>
    .pops{padding-top: 40px;padding-bottom: 30px}
    .pops span{padding: 5px;background-color: #1aa094;border-radius: 3px;color: white;cursor: pointer}

</style>
<script type="text/javascript" src="./src/js/pop.js"></script>
<div class="x-panel">
    <div class="x-panel-title">弹窗：</div>
    <div class="x-panel-content">

        <p>示例：</p>

        <pre><code class="language-html"><textarea>
            <script>
                 pop(type,{});
                 pop('alertt',{
                     title:'zhags',
                     context:'我们发货'
                 });
                 pop('confirm', {
                     context: '成功',
                     confirmfn: function () {
                         alert('点击了确定')
                     },
                     cancelfn:function () {
                         alert('点击了取消')
                     }
                 });
                 pop('tip',{
                     context:'一定时间后自动关闭',
                     time:500
                 });
                 pop('open', {
                     title:'loading',
                     context:'请等待...',
                     url:'',
                     confirmfn:function () {},
                     cancelfn:function () {}

                 });
                 pop('custom',{
                     title:'自定义',
                     width:'600px',
                     height:'200px',
                     context:'随便写给公会',
                     btn:[
                         {
                             name:'取消',
                             class:'cancel',
                             isClose:true,
                             fn:function () {
                                 alert('取消')
                             }
                         },
                         {
                             name:'确定33',
                             class:'confirm',
                             isClose:false,
                             fn:function () {
                                 alert(2);
                             }
                         },
                         {
                             name:'确定',
                             class:'confirm',
                             fn:function () {
                                 alert(1);
                             }
                         }
                     ]
                 })
            </script>
        </textarea></code></pre>
        <br>
        <p class="x-color-orange">效果:</p>
        <div class="pops">
            <span class="pop1" id="pop1">提示（alertt)</span>
            <span class="pop2">确认（confirm)</span>
            <span class="pop3">消息（tip)</span>
            <span class="pop4">open（open)</span>
            <span class="pop5">自定义按钮（custom)</span>
            <span class="pop6">输入框（prompt)</span>
        </div>
    </div>
</div>
<script>
    $('.pop1').click(function () {
        pop('alertt',{
            title:'zhags',
            context:'我们发货'
        });
    });
    $('.pop2').click(function () {
        pop('confirm', {
            context: '成功',
            isClose:false,
            confirmfn: function () {
                alert('点击了确定')
            },
            cancelfn:function () {
                alert('点击了取消')
            }
        });
    });
    $('.pop3').click(function () {
        pop('tip',{
            context:'一定时间后自动关闭',
            time:500
        });
    });
    $('.pop4').click(function () {
        pop('open', {
            title:'loading',
            context:'请等待...',
            url:'',
            confirmfn:function () {
                alert(11);
            },
            cancelfn:function () {
                alert(23)
            }

        });
    });
    $('.pop5').click(function () {
        pop('custom',{
            title:'自定义',
            width:'600px',
            height:'200px',
            context:'随便写给公会',
            btn:[
                {
                    name:'取消',
                    class:'cancel',
                    isClose:true,
                    fn:function () {
                        alert('取消')
                    }
                },
                {
                    name:'确定33',
                    class:'confirm',
                    isClose:false,
                    fn:function () {
                        alert(2);
                    }
                },
                {
                    name:'确定',
                    class:'confirm',
                    fn:function () {
                        alert(1);
                    }
                }
            ]
        })
    });
    $('.pop6').click(function () {
        pop('prompt',{
            value:'初始值',
            title:'请输入',
            btn:[
                {
                    name:'取消',
                    class:'cancel'
                },
                {
                    name:'确定',
                    class:'confirm'
                }
            ],
            confirmfn:function () {
                alert(45);
            },
            cancelfn:function () {

            }

        });
    })
</script>
<?php

include "layout_footer.php";
?>
