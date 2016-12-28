

</div>


<footer>
<!--    <p>©2015 小步创想 All Rights Reserved</p>-->
</footer>


<script>

    $(document).ready(function(){
        //左边菜单栏下拉
        $(".aside p.aside-head").click(function() {
            $(this).next("div.aside-body").slideToggle(300).siblings("div.aside-body").slideUp("slow");
        });


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
