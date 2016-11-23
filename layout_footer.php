

</div>


<footer>
<!--    <p>©2015 小步创想 All Rights Reserved</p>-->
</footer>


<script>

    $(document).ready(function(){
        var str = window.location.href;
        //左边菜单栏下拉
        $(".aside p.aside-head").click(function() {
            $(this).next("div.aside-body").slideToggle('slow').siblings("div.aside-body").slideUp("slow");
        });
        var index = str .lastIndexOf("\/");
        str  = str .substring(index + 1, str .length);
        var num=$('.aside-body a').length;
        for(var i=0;i<num;i++){
            var lists=$($('.aside-body a')[i]);
            var ahref=lists.attr('href');
            if (ahref == str){
                lists.addClass('cur');
                lists.parent().css('display','block');
            }
        }

        $('.header-user-name').mousedown(function(){
            $('.header-user-more').toggle();
        });

//        $('.header-user').mouseleave(function(){
//            $('.header-user-more').hide();
//        });
    });
</script>
<script type="text/javascript" src="lib/prism/prism.js"></script>
</body>
</html>
