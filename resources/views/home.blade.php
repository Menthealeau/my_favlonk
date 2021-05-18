@extends('template.templateSkeleton')
@section('bodyContent')
    <section class="hero is-dark is-medium is-bold">
        <div class="hero-head">
            <nav class="navbar id-dark" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">

                    </a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        </nav>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <img src="{{ asset('Image/favlonks.png') }}" width="300" height="300">
                <h2 class="subtitle">
                    Tired of the favorite system of your internet browser? Favlonks allows you to manage and retrieve
                    your many links more easily and quickly. It also allows you to retrieve useful resources from
                    other users by theme, as well as share them and vote for the best resource library for your previous
                    day.<br>
                    <a class="has-text-info" href="{{route('link.index')}}">try it !</a>
                </h2>
            </div>
        </div>
    </section>
    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-primary">New</span> This is how you can find your every favorite links into cards.
        </p>
    </div>
    <section class="section section-content">
        <div class="container container-content">
            <div class="columns features">
                <div class="column is-4" wfd-id="72">
                    <div class="card large" wfd-id="73">
                        <div class="card-image" wfd-id="82">
                            <figure class="image is-16by9"><img src="{{ asset('Image/google.PNG') }}" alt="Image">
                            </figure>
                        </div>

                        <div class="card-content " wfd-id="74">
                            <div class="media" wfd-id="78">
                                <div class="media-content" wfd-id="79">
                                    <p class="title is-4 no-padding has-text-centered">Google</p>
                                </div>
                            </div>
                            <div class="content" wfd-id="75">
                                Google website
                                <div class="background-icon" wfd-id="76"><span class="icon-twitter" wfd-id="77"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4" wfd-id="72">
                    <div class="card large" wfd-id="73">
                        <div class="card-image" wfd-id="82">
                            <figure class="image is-16by9"><img src="{{ asset('Image/grafikart.PNG') }}" alt="Image">
                            </figure>
                        </div>

                        <div class="card-content " wfd-id="74">
                            <div class="media" wfd-id="78">
                                <div class="media-content" wfd-id="79">
                                    <p class="title is-4 no-padding has-text-centered">Grafikart</p>
                                </div>
                            </div>
                            <div class="content" wfd-id="75">
                                Grafikart website tuto for Developers oriented web
                                <div class="background-icon" wfd-id="76"><span class="icon-twitter" wfd-id="77"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4" wfd-id="72">
                    <div class="card large" wfd-id="73">
                        <div class="card-image" wfd-id="82">
                            <figure class="image is-16by9"><img src="{{ asset('Image/zds.PNG') }}" alt="Image">
                            </figure>
                        </div>

                        <div class="card-content " wfd-id="74">
                            <div class="media" wfd-id="78">
                                <div class="media-content" wfd-id="79">
                                    <p class="title is-4 no-padding has-text-centered "><a
                                            href="https://zestedesavoir.com/" target="_blank"
                                            class="has-text-black">Zeste de savoir</a></p>
                                </div>
                            </div>
                            <div class="content" wfd-id="75">
                                Zeste de savoir website tuto for Developers back-end low-levels langages
                                <div class="background-icon" wfd-id="76"><span class="icon-twitter" wfd-id="77"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro column is-8 is-offset-2 mb-2">
                <h2 class="title">Perfect for organized your many links!</h2>
                <p class="subtitle">you can drag & drop many tiles to sort them like you want</p>
            </div>
            <div class="sandbox">
                <div class="tile is-ancestor">
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-light">
                            <div class="media">
                                <div class="media-left">
                                    <p class="title">Grafikart</p>
                                </div>
                                <div class="media-content level-right">
                                    <button class="button is-link mr-2"><i class="fas fa-user-edit"></i></button>
                                    <button class="button is-orange"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="content mt-1">
                                <p>Grafikart website tuto for Developers oriented web</p>
                            </div>

                            <figure class="image is-16by9">
                               <a href="https://grafikart.fr/" target="_blank"> <img src="{{ asset('Image/grafikart.png') }}"> </a>
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-light">
                            <div class="media">
                                <div class="media-left">
                                    <p class="title">Google</p>
                                </div>
                                <div class="media-content level-right">
                                    <button class="button is-link mr-2"><i class="fas fa-user-edit"></i></button>
                                    <button class="button is-orange"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="content mt-1">
                                <p>Google website</p>
                            </div>
                            <figure class="image is-16by9">
                                <a href="https://google.fr/" target="_blank"> <img src="{{ asset('Image/google.png') }}"> </a>
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-light">
                            <div class="media">
                                <div class="media-left">
                                    <p class="title">Zeste de savoir</p>
                                </div>
                                <div class="media-content level-right">
                                    <button class="button is-link mr-2"><i class="fas fa-user-edit"></i></button>
                                    <button class="button is-orange"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="content mt-1">
                                <p>Zeste de savoir website tuto for Developers back-end low-levels langages</p>
                            </div>
                            <figure class="image is-16by9">
                                <a href="https://zestedesavoir.com/"><img src="{{ asset('Image/zds.png') }}"></a>
                            </figure>

                        </article>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
