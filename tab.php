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
    <div class="x-panel-title">标签</div>
    <div class="x-panel-content">

        <p>示例：</p>

<pre><code class="language-html"><textarea>
        <div class="x-tab">
            <ul class="x-tab-nav">
                <li class="x-tab-li  active"><a href="#">Section 1</a></li>
                <li class=""><a href="#">Section 2</a></li>
                <li class=""><a href="#">Section 3</a></li>
            </ul>
            <div class="x-tab-contents">
                <div class="x-tab-content active">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="x-tab-content">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="x-tab-content">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div>
        
</textarea></code></pre>


        <p>效果:</p>

        <div class="x-tab">
            <ul class="x-tab-nav">
                <li class="x-tab-li  x-active"><a href="#">Section 1</a></li>
                <li class=""><a href="#">Section 2</a></li>
                <li class=""><a href="#">Section 3</a></li>
            </ul>
            <div class="x-tab-contents">
                <div class="x-tab-content active">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="x-tab-content">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="x-tab-content">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div>


        <p>规则:</p>
    </div>



    <?php

    include "layout_footer.php";
    ?>
