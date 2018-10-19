<div class="menu-title">
<span class="color-highlight">Problem with eyes?</span>
<h1>Options</h1>
<a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
</div>
<div class="menu-page">
<div class="toggle-options toggle-dark-mode">
<h1 class="toggle-title bold font-14">Dark Mode</h1>
<a href="#" style="margin-right: 40px;" class="toggle-2 toggle-trigger">
<i class="bg-green-dark"></i>
<span></span>
<i class="bg-gray-light"></i>
</a>
</div>
<!--<div class="decoration bottom-10"></div>
<div class="demo-colors">
<div class="demo-colors-title">
<h1 class="font-14 bold left-20">Choose Color</h1>
</div>
<div class="demo-colors-select">
<a href="#" class="demo-red color-red-dark"><i class="fa fa-circle"></i></a>
<a href="#" class="demo-orange color-orange-dark"><i class="fa fa-circle"></i></a>
<a href="#" class="demo-magenta color-magenta-dark"><i class="fa fa-circle"></i></a>
<a href="#" class="demo-green color-green-dark"><i class="fa fa-circle"></i></a>
<a href="#" class="demo-blue color-blue-light active-demo-color"><i class="fa fa-circle"></i></a>
<a href="#" class="demo-simple color-night-light"><i class="fa fa-circle"></i></a>
</div>
</div>-->


</div>
<script type="text/javascript">
    var highlights = 'highlight-green highlight-red highlight-blue highlight-blue highlight-orange highlight-magenta highlight-simple';

    $('.demo-green').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');  $('#page-transitions').removeClass(highlights).addClass('highlight-green');});
    $('.demo-red').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');   $('#page-transitions').removeClass(highlights).addClass('highlight-red');});
    $('.demo-blue').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');  $('#page-transitions').removeClass(highlights).addClass('highlight-blue');});
    $('.demo-orange').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');   $('#page-transitions').removeClass(highlights).addClass('highlight-orange');});
    $('.demo-magenta').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');   $('#page-transitions').removeClass(highlights).addClass('highlight-magenta');});
    $('.demo-simple').on('click', function(){$('.demo-colors-select a').removeClass('active-demo-color'); $(this).addClass('active-demo-color');  $('#page-transitions').removeClass(highlights).addClass('highlight-simple');});
    $('.toggle-dark-mode a').on('click', function(){
        $(this).parent().toggleClass('toggle-active');
        $(this).parent().find('.toggle-content').slideToggle(250);
        if($('#page-transitions').hasClass('light-skin')){
            console.log('light');
            $('#page-transitions').removeClass('light-skin').addClass('dark-skin');
        } else {  
            $('#page-transitions').removeClass('dark-skin').addClass('light-skin');
        };
        return false;
    });
    if($('#page-transitions').hasClass('dark-skin')){$('.toggle-dark-mode').addClass('toggle-active');}
</script>