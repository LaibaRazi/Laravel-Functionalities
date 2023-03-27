<!doctype html>
<html lang="en">

<head>
    <title>Paws & Claws</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    @Include('header')
    {{-- Slider-Start --}}

    {{-- Sliderpikachu --}}


    <div class="container-fluid">

        <div class="slider__warpper">

            <div class="flex__container flex--pikachu flex--active" data-slide="1">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <p class="text--sub">Bruno</p>
                        <h1 class="text--big">British-Bulldog</h1>
                        <p class="text--normal">The bulldog, also known as the English bulldog, is a beloved breed known
                            for their friendly and loyal personalities. They have a distinct appearance with a large
                            head, wrinkled face, and muscular body. Despite their tough appearance, bulldogs are gentle
                            and affectionate pets that love spending time with their owners. They make great companions
                            for families and are especially good with children. Bulldogs are also known for their
                            adaptability, making them a great choice for apartment living. Overall, the bulldog is a
                            wonderful breed with a big heart and a lot of love to give.</p>
                    </div>
                    <p class="text__background">Bruno</p>
                </div>
                <div class="flex__item flex__item--right"></div>
                {{-- Yellow --}}
                <img class="pokemon__img"
                    src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8eWVsbG93JTIwY2F0c3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" />
            </div>
            <div class="flex__container flex--piplup animate--start" data-slide="2">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <p class="text--sub">Blackie</p>
                        <h1 class="text--big">Persian Cat</h1>
                        <p class="text--normal">The black Persian cat is a stunning breed with a luxurious coat that is
                            shiny and black. Their coat is long and thick, requiring regular grooming to maintain its
                            beauty. Black Persians are known for their calm, gentle nature and make excellent pets for
                            those who are looking for a loving and affectionate companion. They are also intelligent and
                            easy to train, which makes them ideal for families with children. Overall, the black Persian
                            cat is a gorgeous and charming addition to any home.</p>
                    </div>
                    <p class="text__background">Blackie</p>
                </div>
                <div class="flex__item flex__item--right"></div>
                {{-- Blue --}}
                <img class="pokemon__img"
                    src="https://images.unsplash.com/photo-1602937488950-3dbc2ff03d2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Ymx1ZSUyMGNhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" />
            </div>
            <div class="flex__container flex--blaziken animate--start" data-slide="3">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <p class="text--sub">Cosmo</p>
                        <h1 class="text--big">Scarlet Macaw</h1>
                        <p class="text--normal">Macaws are a species of large, brightly colored parrots that are native
                            to Central and South America. They are known for their striking appearance, with vibrant
                            feathers that can range from blue and green to red and yellow. Macaws are highly intelligent
                            and social animals, with some species capable of mimicking human speech. They thrive on
                            interaction with their owners and require plenty of socialization to stay happy and healthy.
                            In the wild, macaws can live up to 50 years, but they also make great pets for those who are
                            prepared to provide them with the love, attention, and care they need. If you're looking for
                            a fun, intelligent, and beautiful companion, a macaw may be the perfect addition to your
                            household.</p>
                    </div>
                    <p class="text__background">Macaw</p>
                </div>
                <div class="flex__item flex__item--right"></div>
                {{-- RED --}}
                <img class="pokemon__img" width="420px" style="margin-left: 12%;"
                    src="https://images.unsplash.com/photo-1633511664699-f99f5171200a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVkJTIwYmlyZHN8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" />
            </div>
            <div class="flex__container flex--dialga animate--start" data-slide="4">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <p class="text--sub">Peanut</p>
                        <h1 class="text--big">Hamester</h1>
                        <p class="text--normal">Hamsters are small, adorable rodents that make great pets for both
                            adults and children. They are easy to care for and require minimal space, making them ideal
                            for apartment living. Hamsters are known for their playful and curious nature, and they
                            enjoy exploring their surroundings. They are also nocturnal, which means they are most
                            active at night. Hamsters require a balanced diet of seeds, nuts, and fresh fruits and
                            vegetables to stay healthy. Overall, hamsters are fun and entertaining pets that are sure to
                            bring joy to any household.</p>
                    </div>
                    <p class="text__background">Peanut</p>
                </div>
                <div class="flex__item flex__item--right"></div>
                {{-- Bluish Grey --}}
                <img class="pokemon__img" width="420px" style="margin-left: 12%;"
                    src="https://media.istockphoto.com/id/92530001/photo/hamster-in-wheel.jpg?s=612x612&w=0&k=20&c=Bb2Ya1laYojijwHn3ss8uITsSI2W5lplHSprftxu0Rg=" />
            </div>
            <div class="flex__container flex--zekrom animate--start" data-slide="5">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <p class="text--sub">Franklin</p>
                        <h1 class="text--big">Rare-Turtle</h1>
                        <p class="text--normal">Turtles are fascinating and unique pets that have been around for
                            millions of years. They are known for their hard shells, which provide them with protection
                            from predators, and their slow movements. Turtles come in many different species, each with
                            their own unique characteristics and needs. They can be kept in indoor or outdoor enclosures
                            and require specific diets and temperatures to thrive. Turtles make great pets for those who
                            are patient and willing to provide them with the care they need. If you're looking for a
                            low-maintenance pet that is both interesting and rewarding, a turtle may be the perfect
                            choice for you.</p>
                    </div>
                    <p class="text__background">Turtle</p>
                </div>
                <div class="flex__item flex__item--right"></div>
                {{-- Grey --}}
                <img class="pokemon__img" width="420px" style="margin-left: 12%;"
                    src="https://images.unsplash.com/photo-1617835963886-d504ab3cca44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dHVybGV8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" />
            </div>
        </div>

        <div class="slider__navi">
            <a href="#" class="slide-nav active" data-slide="1">pikachu</a>
            <a href="#" class="slide-nav" data-slide="2">piplup</a>
            <a href="#" class="slide-nav" data-slide="3">blaziken</a>
            <a href="#" class="slide-nav" data-slide="4">dialga</a>
            <a href="#" class="slide-nav" data-slide="5">zekrom</a>
        </div>

        {{-- Sliderpikachu --}}

        {{-- About section --}}
        <section id="about">
            <div class="container-fluid">
                <div class=" text-center">
                    {{-- heading --}}
                    <h2>About Us</h2>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-5">

                        <p>Welcome to <b>Paws & Claws</b>, where we're passionate about providing the best possible care
                            for all kinds of pets. We understand that pets are family, and we're committed to treating
                            each and every animal with the love, respect, and attention they deserve.</p>
                        <p>Our store is staffed by knowledgeable pet enthusiasts who are eager to help you find
                            everything you need for your pet. We carry a wide variety of high-quality food, toys, and
                            other supplies, as well as a constantly rotating selection of cats, dogs, birds, fish, and
                            other animals. We believe that every pet deserves a loving home, and we work hard to ensure
                            that every animal that comes through our doors finds the perfect family.</p>
                        <p>In addition to our retail offerings, we also offer a range of pet services to help keep your
                            pet healthy and happy. Our grooming services will keep your furry friend looking and feeling
                            great, while our training programs will help you build a strong and lasting bond with your
                            pet. We also offer adoption services, so if you're looking to add a new member to your
                            family, come see us first!</p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://media.istockphoto.com/id/639321736/photo/this-one-loves-the-groomers.jpg?s=612x612&w=0&k=20&c=aqvHBsL7mZaXta9Y9wNMj7-6jeMDabmAnqbPCYFYys4="
                            alt="Pet Store Name">
                    </div>
                </div>
                <br>
                <br>
                {{-- Sales-Part --}}
                <div class=" text-center">
                    {{-- heading --}}
                    <h2>Sale</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">Hamester</h5>
                                <p class="card-text">Content</p>
                                <p><b>Pkr : 7800</b>/-</p>
                                <button type="submit" class="btn-success">Cart</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">Persian Cat</h5>
                                <p class="card-text">Content</p>
                                <p><b>Pkr : 7800</b>/-</p>
                                <button type="submit" class="btn-success">Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">German Shephard</h5>
                                <p class="card-text">Content</p>
                                <p><b>Pkr : 7800</b>/-</p>
                                <button type="submit" class="btn-success">Cart</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>

        </section>


    </div>

    @Include('footer')




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $('.slide-nav').on('click', function(e) {
            e.preventDefault();
            // get current slide
            var current = $('.flex--active').data('slide'),
                // get button data-slide
                next = $(this).data('slide');

            $('.slide-nav').removeClass('active');
            $(this).addClass('active');

            if (current === next) {
                return false;
            } else {
                $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
                $('.flex--active').addClass('animate--end');
                setTimeout(function() {
                    $('.flex--preStart').removeClass('animate--start flex--preStart').addClass(
                        'flex--active');
                    $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
                }, 800);
            }
        });
    </script>
</body>

</html>
