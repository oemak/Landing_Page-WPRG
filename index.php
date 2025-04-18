<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sleepp - Mobile Sleep Assistant</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <script type="module" src="js/map.js"></script>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top" aria-label="Scroll page to the top">
                    <svg width="30" height="30" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <title>Sleepp app logo</title>
                        <path d="M426.248 414.09C335.774 504.637 188.461 504.637 97.9112 414.09C7.36293 323.539 7.36293 176.23 97.9112 85.7192C121.873 61.7981 151.084 43.544 184.679 31.6406C195.262 27.9364 206.979 30.6211 214.837 38.5192C222.775 46.4554 225.458 58.1702 221.718 68.6768C198.966 132.847 214.462 202.306 262.079 249.925C309.623 297.503 379.083 312.961 443.328 290.287C453.835 286.546 465.588 289.231 473.486 297.167C481.424 305.025 484.069 316.78 480.327 327.325C468.498 360.918 450.207 390.129 426.248 414.09ZM138.953 126.761C71.0402 194.673 71.0402 305.174 138.953 373.048C211.514 445.646 335.093 439.106 398.357 358.231C333.127 362.313 268.882 338.769 221.037 290.961C173.193 243.155 149.687 178.909 153.766 113.682C148.553 117.767 143.601 122.113 138.953 126.761Z" fill="currentColor"/>
                    </svg>
                    Sleepp
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#testimonials">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#about-us">About us</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <header id="herosection">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Discover better sleep with <span class="fw-bolder text-primary">Sleepp</span></h1>
                            <p class="lead fw-normal text-muted mb-5">Unlock the secrets to restful nights and energized days with your personal sleep assistant.</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/google-play-badge.svg" alt="App Store Download Badge" /></a>
                                <a href="#!"><img class="app-badge" src="assets/app-store-badge.svg" alt="Google Store Download Badge" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/app-on-mobile.png" class="img-fluid rounded-4" alt="Sleepp moblie app showcase" />
                    </div>
                </div>
            </div>
        </header>
        <article id="testimonials" class="text-center bg-primary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"Such a great and intuitive solution to sleep problems!"</div>
                        <img src="assets/logo-microsoft.svg" alt="Microsoft Logo" style="height: 3rem" />
                        <p class="text-white mt-3 ">Bill Gates - Microsoft</p>
                    </div>
                </div>
                <hr class="text-white mx-auto my-4" style="width: 50%;"/>
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"Sleepp helped me fix my sleep schedule!"</div>
                        <img src="assets/logo-facebook.svg" alt="Facebook Logo" style="height: 3rem" />
                        <p class="text-white mt-3 ">Mark Zuckerberg - Facebook</p>
                    </div>
                </div>
            </div>
        </article>
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-md-6 mb-5">
                        <div class="text-center">
                            <svg width="64" height="64" viewBox="0 0 504 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M146.737 230.586H188.662V272.511H146.737V230.586ZM440.21 125.774V419.248C440.21 442.306 421.344 461.173 398.285 461.173H104.812C81.5437 461.173 62.8872 442.306 62.8872 419.248L63.0968 125.774C63.0968 102.716 81.5437 83.8496 104.812 83.8496H125.774V41.9248H167.699V83.8496H335.398V41.9248H377.323V83.8496H398.285C421.344 83.8496 440.21 102.716 440.21 125.774ZM104.812 167.699H398.285V125.774H104.812V167.699ZM398.285 419.248V209.624H104.812V419.248H398.285ZM314.436 272.511H356.361V230.586H314.436V272.511ZM230.586 272.511H272.511V230.586H230.586V272.511Z" fill="black"/>
                            </svg>
                            <h3 class="font-alt">Personalized Sleep Plans</h3>
                            <p class="text-muted mb-0">Customized sleep schedules and routines based on your sleep patterns and lifestyle to help you achieve optimal rest.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="text-center">
                            <svg width="64" height="64" viewBox="0 0 504 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M398.285 62.8872H104.812C81.7534 62.8872 62.8872 81.7534 62.8872 104.812V398.285C62.8872 421.344 81.7534 440.21 104.812 440.21H398.285C421.344 440.21 440.21 421.344 440.21 398.285V104.812C440.21 81.7534 421.344 62.8872 398.285 62.8872ZM398.285 398.285H104.812V104.812H398.285V398.285Z" fill="black"/>
                                <path d="M146.737 251.549H188.662V356.361H146.737V251.549Z" fill="black"/>
                                <path d="M314.436 146.737H356.361V356.361H314.436V146.737Z" fill="black"/>
                                <path d="M230.586 293.474H272.511V356.361H230.586V293.474Z" fill="black"/>
                                <path d="M230.586 209.624H272.511V251.549H230.586V209.624Z" fill="black"/>
                            </svg>                                
                            <h3 class="font-alt">Sleep Tracking & Analytics</h3>
                            <p class="text-muted mb-0">Detailed insights and reports on your sleep quality, patterns, and duration to help you understand and improve your sleep.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="text-center">
                            <svg width="64" height="64" viewBox="0 0 504 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M388.895 348.395C345.377 348.395 273.182 325.001 235.953 252.806C194.95 173.317 227.149 103.387 245.512 75.4646C150.929 78.7347 75.4648 156.212 75.4648 251.297C75.4648 261.359 76.471 270.918 77.9803 280.477C85.2752 278.213 92.8217 276.704 100.62 276.704C101.374 276.704 102.129 276.955 102.884 276.955C101.626 268.654 100.62 260.101 100.62 251.297C100.62 185.14 142.628 129.296 201.994 108.669C188.913 147.156 182.121 203.251 213.565 264.126C243.751 322.737 297.079 356.193 347.137 368.267C320.473 390.152 287.017 402.478 251.8 402.478C235.701 402.478 220.357 399.962 205.767 395.183C201.239 403.233 195.202 410.024 187.656 415.558C207.528 423.105 229.161 427.633 251.8 427.633C313.43 427.633 367.513 395.938 399.208 347.892C395.938 348.395 392.416 348.395 388.895 348.395Z" fill="black"/>
                                <path d="M188.661 364.746C188.661 343.867 171.808 327.013 150.929 327.013H144.137C135.333 311.92 119.234 301.858 100.619 301.858C72.949 301.858 50.3096 324.498 50.3096 352.168C50.3096 379.838 72.949 402.478 100.619 402.478H150.929C171.808 402.478 188.661 385.624 188.661 364.746Z" fill="black"/>
                            </svg>
                            <h3 class="font-alt">Relaxation Techniques</h3>
                            <p class="text-muted mb-0">Guided meditation sessions and relaxation techniques to reduce stress and prepare your mind for a restful night.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <svg width="64" height="64" viewBox="0 0 504 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M251.339 41.9248C135.627 41.9248 41.9248 135.836 41.9248 251.549C41.9248 367.261 135.627 461.173 251.339 461.173C367.261 461.173 461.173 367.261 461.173 251.549C461.173 135.836 367.261 41.9248 251.339 41.9248ZM251.549 419.248C158.895 419.248 83.8496 344.202 83.8496 251.549C83.8496 158.895 158.895 83.8496 251.549 83.8496C344.202 83.8496 419.248 158.895 419.248 251.549C419.248 344.202 344.202 419.248 251.549 419.248ZM246.937 146.737H245.679C237.294 146.737 230.586 153.445 230.586 161.83V260.772C230.586 268.109 234.36 275.027 240.858 278.8L327.852 330.996C334.979 335.189 344.202 333.092 348.395 325.965C352.797 318.838 350.491 309.405 343.154 305.212L262.03 256.999V161.83C262.03 153.445 255.322 146.737 246.937 146.737Z" fill="black"/>
                            </svg>
                            <h3 class="font-alt">Smart Alarm</h3>
                            <p class="text-muted mb-0">An intelligent alarm that wakes you up at the optimal time in your sleep cycle, ensuring you wake up feeling refreshed and ready to start your day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <h2>App preview</h2>
            <div class="gallery-wrapper">
                <div class="image-thumb-wrapper">
                    <a href="assets/gallery-1.png" target="_blank"><img src="assets/gallery-1.png" alt="Screenshot 1"/></a>
                </div>
                <div class="image-thumb-wrapper">
                    <a href="assets/gallery-2.png" target="_blank"><img src="assets/gallery-2.png" alt="Screenshot 2" /></a>
                </div>
                <div class="image-thumb-wrapper">
                    <a href="assets/gallery-3.png" target="_blank"><img src="assets/gallery-3.png"  alt="Screenshot 3"/></a>
                </div>
            </div>
        </section>
        <section id="about-us" class="container">
            <header class="header text-center">
                <h2 class="mb-0">About us</h2>
            </header>
            <main class="content text-center my-auto">
                <p>
                    Coding is a passion, and our team is the best you can get to thrive in your project. Our strengths are HTML, CSS & PHP.
                    We are a dynamic group of web development enthusiasts who live and breathe code. Our team combines creativity, technical expertise, and a relentless drive for innovation to bring your digital vision to life. 
                    From crafting stunning, responsive designs with HTML and CSS to building robust, scalable backend systems with PHP, we ensure every aspect of your project is executed to perfection.
                </p>
            </main>
            <aside class="sidebar">
                <img src="assets/about-us.jpg" class="rounded-4" alt="Development team"/>
            </aside>
        </section>
        <section id="map" class="container">
        </section>
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Sleepp 2023. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4">
                        <h5 class="modal-title font-alt text-primary" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form id="contactForm" novalidate method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" required maxlength="256" placeholder="Enter your name..."/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" required maxlength="256" placeholder="name@example.com"/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback">An email is required.</div>
                                <div class="invalid-feedback">Email is not valid.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" required maxlength="2000" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback">A message is required.</div>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Submit</button></div>
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $name = isset($_POST['name']) ? $_POST['name'] : '';
                                    $email_from = isset($_POST['email']) ? $_POST['email'] : '';
                                    $message = isset($_POST['message']) ? $_POST['message'] : '';

                                    $email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                                    $name_regex = '/^[a-zA-Z\s\'-]+$/';

                                    $valid = true;

                                    if (!preg_match($email_regex, $email_from) || !preg_match($name_regex, $name)) {
                                        $valid = false;
                                    } 

                                    if ($valid) {

                                        $email_to = "s30289@pjwstk.edu.pl";
                                        $email_subject = "Sleepp Feedback Form";

                                        $email_message = "Message sent from Sleepp's feedback form\n\n";

                                        $email_message .= "SENDER EMAIL: " . $email_from . "\n";
                                        $email_message .= "SENDER NAME: " . $name . "\n";
                                        $email_message .= "MESSAGE:\n" . $message . "\n";

                                        if(@mail($email_to, $email_subject, $email_message)) {
                                            echo '<div id="submitSuccessMessage">
                                                    <div class="text-center mb-3">
                                                        <div class="fw-bolder">Form submission successful!</div>
                                                    </div>
                                                </div>';
                                        } else {
                                            echo '<div id="submitErrorMessage"><div class="text-center text-danger mt-3">Error submitting form!</div></div>';
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/form-validation.js"></script>
        <script>
            (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
              key: "AIzaSyC2AZEhsRspcG0udLO3Rc0r4DXVOUCrEok",
              v: "weekly",
            });
        </script>
    </body>
</html>
