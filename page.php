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
    <div class="x-panel-title">分页：</div>
    <div class="x-panel-content">

        <p>示例：</p>

<pre><code class="language-html"><textarea>

<div class="x-page">
    <div class="x-page-total">共有17条信息</div>
    <div class="x-page-pages">
        <ul>
            <select>
                <option value="" selected="selected">10行</option>
                <option value="">20行</option>
                <option value="">50行</option>
                <option value="">100行</option>
            </select>
            <li>&lt;&lt;首页</li>
            <li class="x-active">1</li>
            <li>2</li>
            <li>3</li>
            <li>尾页>></li>
        </ul>
    </div>
</div>
</textarea></code></pre>


        <p>效果:</p>
        <div class="x-panel" style="width: 800px;">
            <div class="x-panel-content" >
                <div class="x-page">
                    <div class="x-page-total">共有17条信息</div>
                    <div class="x-page-pages">
                        <ul>
                            <select>
                                <option value="" selected="selected">10行</option>
                                <option value="">20行</option>
                                <option value="">50行</option>
                                <option value="">100行</option>
                            </select>
                            <li>&lt;&lt;首页</li>
                            <li class="x-active">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>尾页>></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <p>规则:</p>
    </div>
</div>










<?php

include "layout_footer.php";
?>
