<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Paneli</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<style>

:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723D9;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: var(--first-color);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}
.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color: var(--first-color);
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) + 156px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
    }
}
    </style>
    
</head>
<body id="body-pd">
     <header class="header" id="header">
        <div class="header_toggle"> <i class='fas fa-bars' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="data:image/png;base64,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" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='fas fa-user-shield nav_logo-icon'></i> <span class="nav_logo-name">Yönetici Paneli</span> </a>
                <div class="nav_list"> <a href="{{url('/adminindex')}}" class="nav_link active"> 
                    <i class='fas fa-home nav_icon'></i> <span class="nav_name">Anasayfa</span> </a> 
                    <a href="{{url('/kullanicigoruntule')}}" class="nav_link"> <i class='fas fa-user nav_icon'></i> <span class="nav_name">Kullanıcı İşlemleri</span> </a> 
                    <a href="{{url('/urungoruntule')}}" class="nav_link"> <i class='fas fa-lemon nav_icon'></i> <span class="nav_name">Ürün İşlemleri</span> </a> 
                    <a href="{{url('/kategorigoruntule')}}" class="nav_link"> <i class='fas fa-folder nav_icon'></i> <span class="nav_name">Kategori İşlemleri</span> </a> 
                    <a href="{{url('/siparisgoruntule')}}" class="nav_link"> <i class='fas fa-shopping-basket nav_icon'></i><span class="nav_name">Sipariş İşlemleri</span> </a>
                    
            </div> <a href="{{route('logout')}}" class="nav_link"> <i class='fas fa-sign-out nav_icon'></i> <span class="nav_name">Çıkış</span> </a>
        </nav>
    </div>
 
        <div class="container">
           @yield('content')   
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
</script>




   @yield('js') 

</body>
</html>