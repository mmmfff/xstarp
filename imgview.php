<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2016/1/20
 * Time: 15:49
 */

include "layout_header.php";

?>

<style>
    td,th {border: 1px solid black;}
</style>
<script type="text/javascript" src="./src/js/imgView.js"></script>


<p class="x-font-24 x-title">图片播放器:</p>
<br>
<br>
<div class="x-panel">
    <div class="x-panel-title">场景1<span class="x-font-small">（图片缩略图）</span>：</div>
    <div class="x-panel-content">

        <p class="x-color-orange">示例：</p>

<pre><code class="language-html"><textarea>
   <div class="x-imgView">
       <img class="x-imgView-item" src="./img/b1.png" x-imgView-src="./img/a1.png"/>
       <img class="x-imgView-item" src="./img/b2.png" x-imgView-src="./img/a2.png"/>
       <img class="x-imgView-item" src="./img/b3.png" x-imgView-src="./img/a3.png"/>
   </div>
   <hr>

   <div class="x-imgView">
        <span class="x-imgView-group">
            <span>这两个是同一组</span>
            <img class="x-imgView-item" src="./img/b1.png" x-imgView-src="./img/a1.png"/>
            <img class="x-imgView-item" src="./img/b2.png" x-imgView-src="./img/a2.png"/>
        </span>
        <span>这个是单独一组</span>
        <img class="x-imgView-item" src="./img/b3.png" x-imgView-src="./img/a3.png"/>
   </div>
</textarea></code></pre>

        <br>
        <p class="x-color-orange">效果:</p>
        <div class="x-imgView">
            <img class="x-imgView-item" src="./img/b1.png" x-imgView-src="./img/a1.png"/>
            <img class="x-imgView-item" src="./img/b2.png" x-imgView-src="./img/a2.png"/>
            <img class="x-imgView-item" src="./img/b3.png" x-imgView-src="./img/a3.png"/>
        </div>
        <hr>

        <div class="x-imgView">
            <span class="x-imgView-group">
                <span>这两个是同一组</span>
                <img class="x-imgView-item" src="./img/b1.png" x-imgView-src="./img/a1.png"/>
                <img class="x-imgView-item" src="./img/b2.png" x-imgView-src="./img/a2.png"/>
            </span>
            <span>这个是单独一组</span>
            <img class="x-imgView-item" src="./img/b3.png" x-imgView-src="./img/a3.png"/>
        </div>

        <br>
        <p class="x-color-orange">规则:</p>
        <p>1.class x-imgView 下的 带有x-imgView-item 的图片会被启用图片播放器</p>
        <p>2.大图会读取 x-imgView-src 属性的值</p>
        <p>3.class x-imgView-group 会让图片播放器不与不同 x-imgView-group 的图片 一同播放</p>

    </div>
</div>
<br>
<div class="x-panel">
    <div class="x-panel-title">场景2<span class="x-font-small">（js触发）</span>：</div>
    <div class="x-panel-content">

        <p class="x-color-orange">示例：</p>

<pre><code class="language-html"><textarea>
    <span class="x-button-middle x-button x-button-cadetblue imgview_button">
       查看图片
    </span>

    <span class="x-button-middle x-button x-button-orange imgview_button2">
        查看图片2
    </span>

    <div class="imgview_content" style="display: none">
        内容：
        <p>这里可以是 任何自定义的html</p>
        <p>这里可以是 任何自定义的html</p>
        <p>这里可以是 任何自定义的html</p>
        <p>这里可以是 任何自定义的html</p>
    </div>

    <script>
        var option1={
            imgs:['./img/a1.png','./img/a2.png','./img/a3.png']
        };
        /*加一个 主题的宿主  的 option*/
        var option2={
            imgs:['./img/a1.png','./img/a2.png','./img/a3.png'],
            infoDom:$('.imgview_content')
        };

        $('.imgview_button').click(function(){
            xImgView(option1);
        });

        $('.imgview_button2').click(function(){
            xImgView(option2);
        });

    </script>
</textarea></code></pre>

        <br>
        <p class="x-color-orange">效果:</p>

        <span class="x-button-middle x-button x-button-cadetblue imgview_button">
           查看图片
        </span>

        <span class="x-button-middle x-button x-button-orange imgview_button2">
            查看图片2
        </span>

        <div class="imgview_content" style="display: none">
            内容：
            <p>这里可以是 任何自定义的html</p>
            <p>这里可以是 任何自定义的html</p>
            <p>这里可以是 任何自定义的html</p>
            <p>这里可以是 任何自定义的html</p>
        </div>

        <script>
            var option1={
                imgs:['./img/a1.png','./img/a2.png','./img/a3.png']
            };
            /*加一个 主题的宿主  的 option*/
            var option2={
                imgs:['./img/a1.png','./img/a2.png','./img/a3.png'],
                infoDom:$('.imgview_content')
            };

            $('.imgview_button').click(function(){
                xImgView(option1);
            });

            $('.imgview_button2').click(function(){
                xImgView(option2);
            });

        </script>


        <p class="x-color-orange">规则:</p>
        <p>1.xImgView 方法来调用</p>
        <p>2.option 是参数</p>
        <table class="x-table x-table-interval">
            <thead>
                <tr>
                    <th>属性</th>
                    <th>类型</th>
                    <th>实例</th>
                    <th>作用</th>
                    <th>默认值</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>imgs</td>
                    <td>数组</td>
                    <td>['./img/a1.png','./img/a2.png','./img/a3.png']</td>
                    <td>要播放的图片</td>
                    <td></td>
                </tr>
                <tr>
                    <td>infoDom</td>
                    <td>html/string</td>
                    <td>&lt;p>123&lt;/p></td>
                    <td>左边的图片简介</td>
                    <td></td>
                </tr>
                <tr>
                    <td>onSwitch</td>
                    <td>函数</td>
                    <td>function(index){}</td>
                    <td>点击图片时会触发</td>
                    <td></td>
                </tr>
            </tbody>


        </table>


    </div>
</div>



<?php

include "layout_footer.php";
?>



<script>


    

</script>
