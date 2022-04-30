
<main>
    <section>
        <div>
            <img src="{{ $comic['thumb'] }}" alt="">
            <h1>
                {{ $comic->title }}
            </h1>
            <h3>
                {{ $comic->series }}
            </h3>
            <p>
                {{ $comic->price }}
            </p>
            <p>
                {{ $comic->description }}
            </p>
            <p>
                {{ $comic->type }}
            </p>
            <p>
                {{ $comic->sale_date }}
            </p>

        </div>
    </section>
</main>

