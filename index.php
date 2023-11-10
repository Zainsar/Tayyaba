<?php
include('includes/navbar.php');
include('includes/config.php');


?>
<html>
<style>
    .slid1 #home-slider #zoom1 img {
        -webkit-animation: thing 20s;
        -o-animation: thing 20s;
        animation: thing 20s;
    }

    @keyframes thing {
        from {
            transform: scale(1, 1);

        }

        to {
            transform: scale(1.9, 1.9);
        }
    }

    #div-img {
        box-shadow: 4px /10px /20px /0px black;
        cursor: pointer;
        transition: 400ms;
        border: 6px solid white;

    }

    #div-img:hover {
        filter: grayscale(1.5);
        transform: scale(1.05);
    }

    #container1 img {

        border: 5px solid white;

        transition: all 0.2s ease-in;

    }

    #container1 img:hover {
        transform: scale(1.5) rotate(5deg);
        box-shadow: 0px 0px 20px black;
    }

    .counter-section {
        background-color: #2b2a2f;
        padding: 2.5rem 0;
    }

    .counter-section p {
        color: white;
        text-transform: uppercase;
    }

    #btn {
        height: 50px;
        width: 200px;
    }

    #btn:hover {
        background-color: skyblue;
        color: black;
    }

    .about-section {
        background-color: white;
    }

    .about-section .card,
    .about-section .card img {
        border-radius: 0.625rem;

    }

    .about-section .text-sec {
        padding-left: 2rem;
    }

    .cos-type ul li::before {
        position: absolute;
        left: -2.247rem;
        color: skyblue;
        font-size: 1.25rem;
        content: '\f00c';
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        font-family: "font Awsome $ free";
    }
</style>

</html>
<div id="main-slider" class="slid1"> <!-- Slider -->
    <div id="home-slider" class="owl-carousel owl-theme">
        <div class="item" id="zoom1">
            <img src="images/beauty2.jpg" alt="slide-1" class="img-responsive">
            <div class="slider-desc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slide-offers-left">
                                <div class="slide-offers-title"><span>SALE</span><br />50% OFF</div>
                                <p>New & Fvhresh collection<br />arraival in jenny's store</p>
                                <a href="" class="btn btn-blue">Shop now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Slider -->




<div id="content" style="margin-top: -80px;"> <!-- Content -->
    <div class="container" id="container1">
        <div class="home-content">
            <div class="cat-offers">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cat-sec-1">
                            <img src="images/card7.jpg" class="img-responsive" alt="" style="border-radius: 0.625rem;">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-2">
                            <img src="images/card5.jpg" class="img-responsive" alt="" style="border-radius: 0.625rem;">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-3">
                            <img src="images/card6.jpg" class="img-responsive" alt="" style="border-radius: 0.625rem;">
                            <div class="cat-desc">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id="about">
        <div class="about-section-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                        <div class="card border-0" style="border-radius: 0.625rem;">
                            <img src="images/index1.jpg" alt="" class="img-responsive"
                                style="border: 6px solid black;border-radius: 0.625rem;" id="div-img">

                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 text-sec">
                        <h2>Jenny's Online Platfrom. Cosmetics & Jewellery products are Available</h2>
                        <p>Many people choose not to wear makeup but everybody knows who jenny Jenner is. jenny Jenner
                            has her own
                            makeup brand, for example, her jenny Jenner Lip Kit.
                            Many people have taken to social media to show off their jenny Jenner Lip Kit, but many
                            people
                            also noticed that another brand, Colourpop, is very similar. Makeup is not all about the
                            brand,
                            it is also about the quality, price, and quantity of the product. There are many makeup
                            “dupes” out
                            there, but Colourpop and jenny Cosmetics is one of the most talked about. With these two
                            brands being
                            very similar, it is more logical to buy the Colourpop brand with it not being as high end as
                            jenny Jenner’s brand.
                            Of course, everybody swarmed to buy the new jenny Jenner Lip Kit because it was the newest
                            trend. When applying the
                            liquid lip, it applies kind of dry but is very pigmented.
                            jenny recently changed the formula in the liquid lip to make it</p>
                        <a href="products.php"><button class="main-btn btn-primary mt-4" id="btn">Discover More
                                Products</button></a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <br>
    <br>
    <div id="content"> <!-- Content -->
        <div class="container" id="container1">
            <div class="home-content">
                <div class="cat-offers">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cat-sec-1">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-2">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cat-sec-3">
                                <div class="cat-desc">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div id="content"> <!-- Content -->
            <div class="container" id="container1">
                <h1>Lets Shopping..!!!</h1>
                <p>Professional makeup artist and founder of her own line of cosmetics Bobbi Brown
                    once stated that she “jenny[s] that all women are pretty without makeup- but
                    with it, the right makeup can be pretty powerful.” This statement is relevant
                    to all people and says that all women have natural beauty, but with the optional
                    added touch of makeup, their beauty can be even further accentuated. Public figure,
                    Kat Von D encourages women to embrace their most natural selves through her own
                    cosmetic line. The print advertisement of Kat Von D’s “Lock-It Concealer Creme”
                    shows women of all colors, wearing minimal makeup, probably just foundation and
                    concealer, and embracing their natural skin color and their ethnic background with
                    her wide array of shades for each skin shade. Makeup over the years hasn’t always
                    catered to people embracing their natural skin. The origins of foundation makeup
                    lead to some health risks and didn’t accept people for their natural skin tone,
                    Kat Von D’s makeup line consists of solid, well formulated, and successful products,
                    and the influence of social media has impacted the growth of the beauty world for all people.

                </p>
                <div class="home-content">
                    <div class="cat-offers">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cat-sec-1">
                                    <img src="images/card8.jpg" class="img-responsive" alt=""
                                        style="border-radius: 0.625rem;">
                                    <div class="cat-desc">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-sec-2">
                                    <img src="images/card9.jpeg" class="img-responsive" alt=""
                                        style="border-radius: 0.625rem;">
                                    <div class="cat-desc">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-sec-3">
                                    <img src="images/card10.jpg" class="img-responsive" alt=""
                                        style="border-radius: 0.625rem;">
                                    <div class="cat-desc">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container cos-type" style="padding-top: 3.25rem;">
                <div class="row align-center">
                    <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                        <h2>Jenny's Collection is a worlds best Collection</h2>
                        <p>People do credit jenny Cosmetics for their longer-lasting formula, but Colourpop applies the
                            exact same as jenny Cosmetics.
                            Colourpop is just as pigmented and applies slightly dry, as do all matte liquid lips. The
                            only major difference between
                            Colourpop and jenny Cosmetics is the price. Colourpop does not offer a “lip kit,” but their
                            Ultra Matte Lipstick costs $6,
                            and a matching lip liner is an additional $5. Rather than spending $40.13 for a jenny lip
                            kit after shipping, somebody could
                            spend $16.32 for a Colourpop lip liner and matte liquid lip after shipping. Along with jenny
                            Cosmetics, Colourpop’s ultra-matte
                            liquid lip comes with 0.11 fluid ounces in it. Also the same as jenny Cosmetics, Colourpop
                            is manufactured in California
                            by Seed Beauty. </p>
                        <ul class="list-unstyled py-3"
                            style="font-size: 1rem; line-height:32px; position: relative; margin-left: 34px; font-size: 15px;">
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <a href="products.php"><button class="main-btn btn-primary mt-4" id="btn">Discover More
                                Products</button></a>
                        <br>
                        <br>
                        <br>
                        <img src="images/index5.jpg" id="div-img" alt="" class="img-responsive"
                            style="border: 6px solid black;border-radius: 0.625rem;">

                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card border-0">
                            <img src="images/index1.webp" id="div-img" alt="" class="img-responsive"
                                style="border: 6px solid black;border-radius: 0.625rem;">

                            <br>
                            <img src="images/index3.webp" id="div-img" alt="" class="img-responsive"
                                style="border: 6px solid black;border-radius: 0.625rem;">




                        </div>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="content"> <!-- Content -->
                <div class="container" id="container1">
                    <div class="home-content">
                        <div class="cat-offers">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="cat-sec-1">
                                        <div class="cat-desc">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cat-sec-2">
                                        <div class="cat-desc">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cat-sec-3">
                                        <div class="cat-desc">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="content-offers" style="background:url(images/slider7.jpg); background-size: cover;">

                    <div class="container">
                        <div class="ct-offers">
                            <div class="ct-offers-title" style="color: white; margin-left: 80px;">Stylish Jewelery</div>
                            <p style="color: white;margin-left: 80px;">The generated Lorem Ipsum is therefore always
                                free from repetition, injected humour</p>
                            <a href="" class="btn btn-blue" style="margin-left: 80px;">Discover more Product</a>
                        </div>
                    </div>
                </div>

                <div class="brands">
                    <div class="container">
                        <div class="brands-inner">
                            <div class="brand-title">
                                <span>My Online Store</span>
                            </div>

                            <div id="slider-home"> <!-- Slider -->
                                <div id="brand-carousel" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <h2>Jenny</h2>

                                    </div>
                                    <div class="item">
                                        <h2>Cosmetics</h2>
                                    </div>
                                    <div class="item">
                                        <h2>&</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Jewellery</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Store</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Online</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Shopping</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Platform</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Let's Go</h2>
                                    </div>
                                    <div class="item">
                                        <h2>Shopping</h2>
                                    </div>
                                </div>
                            </div> <!-- Slider -->

                        </div>
                    </div>
                </div>


                <div class="rec-blog">
                    <div class="container" id="container1">
                        <div class="rec-blog-inner">
                            <div class="blog-title">
                                <span>The Blog</span>
                            </div>
                            <div class="row">
                                <div class="col-md-4 blog-ct">
                                    <a href=""><img src="images/card1.jpg" alt="" class="img-responsive"
                                            style="border-radius: 0.625rem;"></a>
                                    <div class="blog-ct-title">
                                        <a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque !</a>
                                        <span>May 11,2014</span>
                                    </div>
                                </div>
                                <div class="col-md-4 blog-ct">
                                    <a href=""><img src="images/card4.webp" alt="" class="img-responsive"
                                            style="border-radius: 0.625rem;"></a>
                                    <div class="blog-ct-title">
                                        <a href="">Voluptatem accusantium doloremque</a>
                                        <span>May 11,2014</span>
                                    </div>
                                </div>
                                <div class="col-md-4 blog-ct">
                                    <a href=""><img src="images/card2.webp" alt="" class="img-responsive"
                                            style="border-radius: 0.625rem;"></a>
                                    <div class="blog-ct-title">
                                        <a href="">Voluptatem accusantium doloremque</a>
                                        <span>May 11,2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- Content -->
            <?php
            include('includes/footer.php')
                ?>






            <!-- <script>
document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration) {
        let obj = document.getElementById(id);
        let current = start;
        let range = end - start;
        if (range === 0) {
            console.error("Range cannot be zero.");
            return;
        }
        let increment = end > start ? 1 : -1;
        let timeInterval = duration / Math.abs(range);
        let timer = setInterval(() => {
            current += increment;
            obj.textContent = current;
            if (current === end) {
                clearInterval(timer);
            }
        }, timeInterval * 1000);
    }

    counter("count1", 0, 1287, 3600);
    counter("count2", 100, 5786, 2500);
    counter("count3", 0, 1440, 3600);
    counter("count4", 0, 7710, 3600);
});
</script> -->