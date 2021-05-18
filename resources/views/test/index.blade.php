@extends('template.templateSkeleton')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
@stop
@section('bodyContent')
    <section class="section section-content">
        <div class="columns">
            <div class="column is-2">
                <aside class="is-medium menu">
                    <div class="field is-grouped pt-2 level-right">
                        <p class="control">
                            <input class="input" type="text" placeholder="Find a link">
                        </p>
                        <p class="control">
                            <a class="button is-info">
                                Search
                            </a>
                        </p>
                    </div>
                    <div class="level level-current mt-6 is-flex">
                        <div class="level-left">
                            <div class="level-item ">
                                <p class="menu-label ">categories</p>
                            </div>
                            <div class="level-item">
                                <button class="button is-success"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="level-right">

                        </div>
                    </div>

            <ul class="menu-list">
                <li class="is-right"><a href="#const" class=" menu-item is-active"><i class="fab fa-css3-alt"></i> CSS</a>
                </li>
                <li><a href="#let" class="menu-item"><i class="fab fa-js"></i> JS</a></li>
                <li><a href="#let" class="menu-item"><i class="fab fa-html5"></i> HTML</a></li>
            </ul>
            </aside>
        </div>

        <div class="column is-10 ">
            @if ($errors->any())

            <div class="help is-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>


            @endif
            <div class="sandbox">
                @php
                    $count = 0;
                @endphp

                <div class="tile is-ancestor">
                    @foreach ( $links as $link )
                    @if ($count <4)

                    @if(isset($linkToUpdate) && $linkToUpdate-> id == $link->id)
                    @include ('template.templateTileUpdateLink')
                    @else
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-light">
                            <div class="media">
                                <div class="media-left">
                                    <p class="title">{{ $link->title }}</p>
                                </div>
                                <div class="media-content level-right">
                                    <a href="{{ route('link.update',['id'=>$link->id])}}"><button class="button update is-link mr-2"><i class="fas fa-user-edit"></i></button></a>
                                    <a href="{{ route('link.delete',['id'=>$link->id])}}"><button class="button is-orange"><i class="fas fa-trash-alt"></i></button></a>
                                </div>
                            </div>
                            <div class="content mt-1">
                                <p>{{$link->description}}</p>
                            </div>

                            <figure class="image is-16by9">
                                <a href="{{$link->link}}" target="_blank"> <img
                                        src="{{ asset('Image/'. $link->image) }}"> </a>
                            </figure>
                        </article>
                    </div>
                    @endif
                    @php $count++; @endphp
                    @else
                    </div>
                    <div class="tile is-ancestor">
                    @php $count = 0; @endphp
                    @endif


                    @endforeach
                    <div id='ajout' class="tile  tile-ajout is-parent is-shady">
                        <article class="tile is-child tile-child-ajout notification is-light">
                            <span class="fas fa-ajout fa-plus"></span>
                            </a>
                        </article>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <div class="modal" id='modal'>
        @include('template.templateModalAddLink')
    </div>
@endsection

@push('scripts')

<script src={{asset('js/modal.js')}}></script>

@endpush
