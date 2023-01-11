<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Froga 5</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body>

    @include('web\layouts\_menuJuegos')

    <main class="container my-3">
        <article class="d-flex flex-row justify-content-around my-3">

            <section class="talde mx-3">
                <div class="tituloTalde d-flex align-items-center justify-content-center">
                    <h2>Analisis</h2>
                </div>
            </section>

            <section class="talde mx-3">
                <div class="tituloTalde d-flex align-items-center justify-content-center">
                    <h2>Microbiologia</h2>
                </div>
            </section>

            <section class="talde mx-3">
                <div class="tituloTalde d-flex align-items-center justify-content-center">
                    <h2>Medida</h2>
                </div>
            </section>

            <section class="talde mx-3">
                <div class="tituloTalde d-flex align-items-center justify-content-center">
                    <h2>Biotecnologia</h2>
                </div>
            </section>

        </article>


        <article class="my-5" id="hitzRandom">

            <div class="d-flex flex-row justify-content-evenly py-2">
                <section class="hitz fs-3">Lorem</section>
                <section class="hitz fs-3">ipsum</section>
                <section class="hitz fs-3">dolor</section>
            </div>

            <div class="d-flex flex-row justify-content-evenly py-2">
                <section class="hitz fs-3">sit</section>
                <section class="hitz fs-3">amet</section>
                <section class="hitz fs-3">consectetur</section>
            </div>

            <div class="d-flex flex-row justify-content-evenly py-2">
                <section class="hitz fs-3">adipisicing</section>
                <section class="hitz fs-3">elit</section>
                <section class="hitz fs-3">Reprehenderit</section>
            </div>

            <div class="d-flex flex-row justify-content-evenly py-2">
                <section class="hitz fs-3">iusto</section>
                <section class="hitz fs-3">Perspiciatis</section>
                <section class="hitz fs-3">consequatur</section>
            </div>

        </article>


    </main>

    @include('web\layouts\_maskotaFroga');

</body>

</html>
