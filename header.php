<script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $(window).scroll(function(){
    if ($(this).scrollTop() > 1000) {$('.scrollup').fadeIn();} 
    else {$('.scrollup').fadeOut();}
    });
    $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
    });
    });
</script>
</head>
<body> 
<header>
    <div class="logo"> 
        <a href="/" title=""> <img class="image" src="images/logo.png" alt="МБОУ СОШ"></a>
        <span class="name">МБОУ СОШ с.Целинный Абзелиловского района РБ</span>
    </div>
</header>