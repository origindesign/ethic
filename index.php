
<?php
    $image_sizes = ['3000', '2000', '1200', '800'];

    function srcset($filename, $image_sizes = null, $extension = '.jpg'){
        $output = '';
        if(!isset($image_sizes)){
          global $image_sizes;
        }
        foreach($image_sizes as $key => $size){
            $output .= '/images/'.$filename.'-'.$size.$extension.' '.$size.'w';
            if($key !== count($image_sizes)-1){
                $output .= ',';
            }
        }
        print $output;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>We Are ETHIC</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" media="all" href="/dist/style.css?v=1.7" />

    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Furthering Equity in Trails, Health, Infrastructure, and Community" />
    <meta property="og:site_name" content="ETHIC" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://weareethic.org" />
    <meta property="og:title" content="We Are ETHIC" />
    <meta property="og:description" content="Furthering Equity in Trails, Health, Infrastructure, and Community" />
    <meta property="og:image" content="/images/1-3000.jpg" />

    <meta name="format-detection" content="telephone=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#212121">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#212121">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="theme-color" content="#212121">

</head>
<body>

    <div class="overflow-hidden layout-container">

        <header class="pos-relative t-align-center site-header pseudo-before pattern-horizontal right bottom">
            <div class="overflow-hidden cover">
                <div class="parallax cover carousel">
                    <div class="media cover">
                        <img data-parent-fit="cover" data-src="/images/1-3000.jpg" data-sizes="auto" class="lazyload" width="3000" height="2000" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('1'); ?>" alt="Two people rolling around a berm on a trail" />
                    </div>
                    <div class="media cover">
                        <img data-parent-fit="cover" data-src="/images/2-3000.jpg" data-sizes="auto" class="lazyload" width="3000" height="2000" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('2'); ?>" alt="Groupd of people riding bikes on a street" />
                    </div>
                    <div class="media cover focus-middle-right">
                        <img data-parent-fit="cover" data-src="/images/5-3000.jpg" data-sizes="auto" class="lazyload" width="3000" height="2000" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('5'); ?>" alt="Man hiking on a forest trail" />
                    </div>
                </div>
            </div>
            <div class="d-flex direction-column jc-flex-start ai-center cover t-c-white fade-in t-shadow copy">

                <strong>
                    <em class="t-large">
                    NWA Trailblazers &amp; BikeNWA are now
                    </em>
                </strong>
                <h1>
                    <img src="/images/logo-trailblazers-white.svg" alt="Ethic plus Trailblazers" class="logo" />
                </h1>
                <h4>
                    Equity  <span> // </span>  Trails  <span> // </span>  Health  <span class="hide-phone"> // </span>  Infrastructure  <span> // </span>  Community
                </h4>

            </div>
        </header>


        <div class="container main-content">

            <div class="grid-column-main inner-grid paragraph--image-aside-copy row-padding-top align--left row-gap-base pseudo-before pattern-vertical bottom extend">
                <div class="row-padding fade-in copy">
                    <h2 class="t-c-primary">
                        New Name. <br />
                        Expanded Vision.
                    </h2>
                    <p class="t-large">
                        We are <strong>Trailblazers &plus; ETHIC</strong>, a 501(c)(3) nonprofit formed in 2021 through the merger of NWA Trailblazers, an organization that has developed 300&plus; miles of multi-use trails, including the OZ Trails network and BikeNWA, a bicycle advocacy and education focused organization that has led the region in advocating for active transportation.
                    </p>
                    <p class="t-large">
                        Our new name is an expression of the core tenets that inform and inspire our work - “Trailblazers”, somebody who's willing to take risks and go on a path that isn't already there. They blaze a trail and leave a path for others creating access and opportunities for everyone &plus; “ETHIC” which furthers Equity in Trails, Health, Infrastructure, and Community.
                        ETHIC advocates for prioritizing underserved populations' access to trails, cycling, and active transportation infrastructure and encourages their use to create healthier communities.
                    </p>
                    <p class="t-larger">
                        Trailblazers focus on trail development and maintenance. ETHIC focuses on all things public engagement. <strong>We are stronger together. We are Trailblazers. We are ETHIC.</strong>
                    </p>
                </div>
                <div class="row-padding grid-offset-left pseudo-before image">
                    <div class="cover pos-relative">
                        <div class="media portrait focus-middle-left">
                            <img data-parent-fit="cover" data-src="/images/first-3000.jpg" data-sizes="auto" class="lazyload" width="3000" height="2000" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('first'); ?>" alt="Two men gravel biking" data-aspectratio="1.5" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="container grid-main-full row-padding bg-grey pseudo-before pattern-horizontal right top">
                <div class="grid-area-main inner-grid paragraph--single-column-copy ">
                    <div class="content-container t-largest t-c-white t-align-center fade-in copy">
                        <p>
                            At <strong>Trailblazer &plus; ETHIC</strong>, our work is rooted in the belief that when people move their bodies, they are able to connect to the strength, dignity, and sense of belonging that reside within us all.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid-column-main inner-grid paragraph--image-aside-copy row-padding-bottom align--right row-gap-base pseudo-before pattern-vertical top">
                <div class="row-padding fade-in copy">
                    <div class="p-b-2 border-bottom">
                        <p class="t-large">
                            <strong>
                                Our new site is coming soon. In the meantime, please visit BikeNWA and NWA Trailblazers to learn more.
                            </strong>
                        </p>
                    </div>
                    <div class="p-v-2 paragraph--logo-text border-bottom d-flex">
                        <div class="m-b-base image">
                            <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/logo-bike-nwa.svg" alt="Logo: BikeNWA" />
                        </div>
                        <div class="copy">
                            <p>
                                Learn more about BikeNWA’s vision for a safe, easy, and convenient multi-modal network that connects where people live, work, and play, along with their initiatives to promote advocacy and education in cities across Northwest Arkansas.
                            </p>
                            <p>
                                <a class="link-arrow" target="_blank" href="https://www.bikenwa.org/">
                                    Visit Site <span class="visually-hidden">: BikeNWA</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="p-v-2 paragraph--logo-text border-bottom d-flex">
                        <div class="m-b-base image">
                            <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/logo-nwa-trailblazers.svg" alt="Logo: NWA Trailblazers" />
                        </div>
                        <div class="copy">
                            <p>
                                Through the development of multi-use community trails for cycling, running, walking and discovering the beauty of Northwest Arkansas, NWA Trailblazers works to fulfill its mission of developing infrastructure that connects community and moves people.
                            </p>
                            <p>
                                <a class="link-arrow" target="_blank" href="https://www.nwatrailblazers.com/">
                                    Visit Site <span class="visually-hidden">: NWA Trailblazers</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row-padding grid-offset-right pseudo-before image">
                    <div class="cover pos-relative">
                        <div class="media portrait">
                            <img data-parent-fit="cover" data-src="/images/second-3000.jpg" data-sizes="auto" class="lazyload" width="3000" height="2000" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('second'); ?>" alt="Small child on a bike chasing bubbles" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="container grid-main-full pos-relative pseudo-before pattern-horizontal left top">
                <div class="media cover">
                    <img data-parent-fit="cover" data-sizes="auto" class="lazyload" width="3000" height="2003" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php srcset('footer'); ?>" alt="Close up of a trail runner's shoes" />
                </div>
                <div class="grid-area-main inner-grid pos-relative paragraph--copy-over-image">
                    <div class="row-padding t-c-white fade-in copy t-shadow">
                        <span class="h2 d-block">
                            New site coming
                        </span>
                        <span class="h1 d-block">
                            Winter 2021
                        </span>
                    </div>
                </div>
            </div>

            <div class="grid-column-main inner-grid paragraph--form row-padding pseudo-before pattern-vertical top extend">
                <div class="fade-in content-container-offset-right copy">

                    <h3>
                        Join our mailing list to get the latest news on everything <strong>TRAILBLAZER &plus; ETHIC</strong>.
                    </h3>

                    <form id="signup-form" action="/signup.php" method="post" class="d-flex flex-wrap jc-space-between">
                        <div class="form-item">
                            <label for="firstname" class="required">First Name</label>
                            <input aria-label="First Name" id="firstname" name="firstname" required type="text">
                        </div>
                        <div class="form-item">
                            <label for="lastname" class="required">Last Name</label>
                            <input aria-label="Last Name" id="lastname" name="lastname" required type="text">
                        </div>
                        <div class="form-item type-email">
                            <label for="email" class="required">Email </label>
                            <input autocomplete="Email" aria-label="Email" id="email" maxlength="200" name="email" required type="email">
                        </div>
                        <div class="form-item form-actions">
                            <button type="submit">Sign up</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>


        <footer class="bg-grey-dark t-c-white container site-footer">
            <div class="grid-area-main inner-grid">

                <div class="content-container-offset-right copy">

                    <div class="d-flex footer-top ai-center jc-space-between">
                        <img src="/images/logo-trailblazers-white.svg" alt="Ethic plus Trailblazers" class="logo" />
                        <ul class="reset d-flex m-t-base social">
                            <li>
                                <a href="mailto:info@bikenwa.org" target="_blank">
                                    <span class="visually-hidden">Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/bikeozarks" target="_blank">
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/bikenwa/" target="_blank">
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p>
                        1000 SE 5th ST. Suite E, Bentonville, AR 72712, United States <br />
                        Trailblazers &plus; ETHIC is a 501(c)(3) nonprofit. All monetary and in-kind donations are tax-deductible. Tax ID is 91-2038915.
                    </p>

                    <p class="copyright">
                        &copy; 1999-2021 ETHIC All Rights Reserved.
                    </p>

                </div>

            </div>
        </footer>


    </div>


    <script src="https://cdn.jsdelivr.net/combine/npm/jquery@3.6.0/dist/jquery.min.js,npm/slick-carousel@1.8.1,npm/jquery-inview@1.1.2/jquery.inview.min.js,npm/lazysizes@5.3.2/lazysizes.min.js,npm/lazysizes@5.3.2/plugins/respimg/ls.respimg.min.js,npm/lazysizes@5.3.2/plugins/object-fit/ls.object-fit.min.js,npm/lazysizes@5.3.2/plugins/parent-fit/ls.parent-fit.min.js"></script>
    <script src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
    <script src="dist/all.min.js?v=1.7"></script>


</body>
</html>
