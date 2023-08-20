<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HAEDER -->
    <header class="position-fixed w-100 transition text-white">
        <div class="d-flex p-4 container">
            <a href="/yes-blog" class="d-flex text-decoration-none">
                <h3 class="my-auto text-white" ></h3>
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="/yes-blog/location" class="btn text-white">
                    Login/Register
                </a>
                <a href="/yes-blog/location" class="btn text-white">
                    Location
                </a>
                <a href="/yes-blog/blog" class="btn text-white">
                    Blog
                </a>
                <a href="/yes-blog/price" class="btn btn-dark">
                    PRICE LIST
                </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="/yes-blog/location" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="/yes-blog/blog" class="btn text-white">
                Blog
                <hr />
            </a>
            <div>
                <a href="/yes-blog/price" class="btn btn-light w-100">PRICE LIST</a>
            </div>
        </div>
    </header>

    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{ asset('images/Free_delivery.png') }}">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">Heroes title goes here</h1>
                        <div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit enim ad vero quae non vitae
                            ut
                            qui
                            hic repellat nihil libero, neque necessitatibus ipsum ipsam obcaecati esse veritatis debitis
                            a?
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quae esse, eum fugiat quia
                            sapiente
                            nostrum quo cum consectetur dolorum nulla sequi voluptas ad illum! Obcaecati ducimus
                            perspiciatis
                            doloremque nostrum.</b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>Title</b>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, delectus.</p>
                            </div>
                            <div class="col">
                                <b>Title</b>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, delectus.</p>
                            </div>
                            <div class="col">
                                <b>Title</b>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, delectus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Section 2 Title</h1>
                <a class="btn text-white ms-auto">More ></a>
            </div>
            <div class="row mt-4 gy-4">
                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Some description goes here</b>
                        <a class="btn btn-light">BUY IT</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="https://cdn.pixabay.com/photo/2015/02/02/11/09/office-620822_640.jpg">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Some description goes here</b>
                        <a class="btn btn-light">BUY IT</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="https://cdn.pixabay.com/photo/2016/03/26/13/09/cup-of-coffee-1280537_640.jpg">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Some description goes here</b>
                        <a class="btn btn-light">BUY IT</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="https://cdn.pixabay.com/photo/2015/01/09/11/08/startup-594090_640.jpg">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Some description goes here</b>
                        <a class="btn btn-light">BUY IT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4">
        <div class="row">
            <div class="col">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            </div>
            <div class="col">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam placeat, quidem itaque explicabo
                impedit cum quam esse aut quod nostrum quia eum, atque accusantium? Aut cumque commodi repudiandae
                quidem aliquid!
            </div>
        </div>

        <div>
            <img style="height:400px;" class="w-100 object-fit-cover rounded-3"
                src="https://cdn.pixabay.com/photo/2018/03/10/12/00/teamwork-3213924_640.jpg">
        </div>

        <div class="row">
            <div class="col-lg-3">
                <h3>Title Content</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero corporis corrupti aut, maxime
                    repudiandae odio magnam saepe recusandae deleniti quas eos dolores alias</p>
            </div>

            <div class="col-lg-3">
                <h3>Title Content</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero corporis corrupti aut, maxime
                    repudiandae odio magnam saepe recusandae deleniti quas eos dolores alias</p>
            </div>

            <div class="col-lg-3">
                <h3>Title Content</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero corporis corrupti aut, maxime
                    repudiandae odio magnam saepe recusandae deleniti quas eos dolores alias</p>
            </div>

            <div class="col-lg-3">
                <h3>Title Content</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero corporis corrupti aut, maxime
                    repudiandae odio magnam saepe recusandae deleniti quas eos dolores alias</p>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>SECTION TYPE 4</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem fuga molestiae distinctio eius
                quibusdam mollitia atque accusantium aliquam quam porro consequuntur adipisci, reiciendis culpa dolorum!
                Deserunt rerum ipsam voluptatum ut.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="https://media.istockphoto.com/id/1438046959/photo/office-of-a-venture-company-where-everyone-works-well-together.jpg?b=1&s=170667a&w=0&k=20&c=wJSfiCN3PyuusrVbVP13-yUfTURArLqjJNKWXyGk-LU=">
                <div class="py-2 d-grid gap-2">
                    <h2>Some description goes here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloribus consequuntur aspernatur
                        error, qui obcaecati illo officia quibusdam rerum dolor consequatur in. Recusandae incidunt ea
                        dolores voluptates veniam officiis saepe?</p>
                </div>
            </div>
        </div>

        <div class="text-center py-2">
            <a class="btn btn-dark">READ MORE</a>
        </div>
    </section>

    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
            <p>Find us at here</p>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.962455232647!2d112.7355958220893!3d-7.24511289276129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sen!2sid!4v1689251639326!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 6 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery</h1>
            <a class="btn text-white ms-auto my-auto" href="/yes-blog/blog">More ></a>
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_640.jpg">
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus itaque saepe quaerat molestiae
                    voluptatum blanditiis nesciunt recusandae dolorem deserunt porro totam, ipsa tempore nihil rem at
                    laboriosam corrupti magnam.</p>
                <b>Contact:</b>
                <p>+1234567890</p>
                <b>Email</b>
                <p>admin@mail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Office Jakarta</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <b>Office Surabaya</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <div class="d-flex justify-content-between">
                    <b>About us</b>

                    <b>Contact Us</b>

                    <b>Hire Us</b>
                </div>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'black'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>