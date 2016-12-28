<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2016/1/20
 * Time: 15:49
 */

include "layout_header.php";

?>

<div class="x-panel">
    <div class="x-panel-title">导航</div>
    <div class="x-panel-content">

        <p>示例：</p>

        <pre><code class="language-html"><textarea>

</textarea></code></pre>


        <p>效果:</p>
        <div class="x-nav">
            <a class="x-nav-head">主菜单1<i class="iconfont icon-xiangyou1"></i></a>
            <div class="x-nav-body">
                <a>子菜单1</a>
                <a>子菜单2</a>
                <a>子菜单3</a>
            </div>
            <a class="x-nav-head"><i class="iconfont icon-bianjiwenjian"></i>主菜单2<i class="iconfont icon-xiangyou1"></i></a>
            <div class="x-nav-body">
                <a>子菜单1</a>
                <a>子菜单2</a>
                <a>子菜单3</a>
            </div>
        </div>

        <script>
            $('.x-nav-head').click(function(){
                $(this).next('.x-nav-body').slideToggle().siblings('.x-nav-body').slideUp();
            })
        </script>


        <p>规则:</p>
    </div>



    <?php

    include "layout_footer.php";
    ?>
