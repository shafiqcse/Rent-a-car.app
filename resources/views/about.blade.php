@extends('welcome')

@section('content')

    <main>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        <div class="mx-auto max-w-screen-xl ">
            <div class="mt-16">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900 font-car">About Us</h2>
            </div>
            <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">

                <div class="md:m-12 p-6 md:w-1/2">
                    <img loading="lazy" src="storage/images/shop1.png" alt="shop image">
                </div>
                <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6 text-black">

                    <p>Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.</p>
                    <br>
                    <p>Our shop is strategically positioned near major transportation hubs, including airports, train stations,
                        and bus terminals, making it incredibly convenient for you to pick up and drop off your rental vehicle.
                        Upon arrival, our friendly staff will warmly greet you, ensuring a smooth and efficient rental process
                        from start to finish.</p>
                </div>

            </div>
            <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">

                <div class="md:m-12 p-6 md:w-1/2 md:order-last ">
                    <img loading="lazy" src="storage/images/shop_2.jpg" alt="shop image">
                </div>

                <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6 text-black">
                    <p>Located in a vibrant neighborhood, our shop is surrounded by a variety of amenities and attractions.
                        You'll find an array of restaurants, cafes, and shopping centers just a short distance away, perfect for
                        grabbing a bite to eat or running errands before or after your car rental experience.</p>
                    <br>
                    <p>With ample parking space available at our location, you can easily drive in, park your own vehicle, and
                        drive out with your rental car seamlessly. We prioritize your convenience, and our location is designed
                        to minimize any inconvenience or delays, allowing you to focus on your journey ahead.</p>
                </div>
        </body>
        </html>
    </main>

@endsection
