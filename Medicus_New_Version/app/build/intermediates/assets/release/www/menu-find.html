
<?php
include("../assets/function/function.php");
?>


<div id="search-page">
<div class="menu-title">
<span class="color-highlight">Medicus</span>
<h1>Search</h1>
<a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
</div>
<div id="menu-search-list">
<div class="search search-header">
<i class="fa fa-search"></i>
<input type="text" placeholder="Search" data-search>
<a href="#"><i class="fa fa-times"></i></a>
</div>
<div class="menu-search-trending">
<h1>Trending</h1>
<ul>
<li><a href="pharmacy.php">All Products</a></li>
<?php getsCategory(); ?>
</ul>
</div>

<div class="search-results disabled-search-list bottom-10">

<?php getsCategorySearch(); ?>

</div>
<script type="text/javascript">
        //Preload Image
        $(function() {$(".preload-search-image").lazyload({threshold : 0});});
        
        //Search Menu Functions
        function search_menu(){
            $('[data-search]').on('keyup', function() {
                var searchVal = $(this).val();
                if (searchVal != '') {
                    $('.menu-search-trending').addClass('disabled-search-item');
                    $('#menu-search-list .search-results').removeClass('disabled-search-list');
                    $('#menu-search-list [data-filter-item]').addClass('disabled-search-item');
                    $('#menu-search-list [data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('disabled-search-item');
                } else {
                    $('.menu-search-trending').removeClass('disabled-search-item');
                    $('#menu-search-list .search-results').addClass('disabled-search-list');
                    $('#menu-search-list [data-filter-item]').removeClass('disabled-search-item');
                }
            });
            return false;
        }
        search_menu();
        
        //Menu Search Values//
        $('.menu-search-trending a').on('click',function(){
            var e = jQuery.Event("keydown");
            e.which = 32;
            var search_value = $(this).text();
            $('.search-header input').val(search_value);
            $('.search-results').removeClass('disabled-search-list');
            $('[data-filter-item]').addClass('disabled-search-item');
            $('[data-filter-item][data-filter-name*="' + search_value.toLowerCase() + '"]').removeClass('disabled-search-item');
            $('#search-page').addClass('move-search-list-up');
            $('.search-header a').addClass('search-close-active');
            $('.menu-search-trending').addClass('disabled-search-item');
            return false;
        });

        $('#menu-hider, .close-menu, .menu-hide').on('click',function(){
            $('.menu-box').removeClass('menu-box-active');
            $('#menu-hider').removeClass('menu-hider-active');
            setTimeout(function(){$('#search-page').removeClass('move-search-list-up');},100);
            $('[data-filter-item]').addClass('disabled-search-item');
            $('.search-header input').val('');
            $('.menu-search-trending').removeClass('disabled-search-item');
            $('.search-header a').removeClass('search-close-active');
            $('#search-page').removeClass('move-search-list-up');
            return false;
        });
        $('#menu-search-list input').on('focus',function(){
            $('#search-page').addClass('move-search-list-up');
            $('.search-header a').addClass('search-close-active');
            return false;
        })
        $('.search-header a').on('click',function(){
            $('.menu-search-trending').removeClass('disabled-search-item');
            $('#menu-search-list .search-results').addClass('disabled-search-list');
            $('.search-header input').val('');
            $('#search-page').removeClass('move-search-list-up');
            $('.search-header a').removeClass('search-close-active');
            return false;
        });
    </script>
</div>