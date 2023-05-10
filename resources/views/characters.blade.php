@extends('layouts.layout_general')
@section('page_title','Characters')

@section ('content')
 <div class="container">

 <div>
            <ul class="container_card">
                @foreach ($serieslist as $element)
                    <li class="card_it">
                        <h3>{{$element['title']}}</h3>
                        <div class="artisti">
                            <h5>Artists</h5>
                                @foreach ($element['artists'] as $artist)
                                    <span>{{$artist}},</span>
                                @endforeach
                        </div>
                        <div class="scrittori">
                            <h5>Scrittori</h5>
                                @foreach ($element['writers'] as $writer)
                                    <span>{{$writer}},</span>
                                @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
 </div>
@endsection

<style lang="scss" scoped>
    .container{
        width: 100%;
    }
    .container_card{
        display: flex;
        margin: auto;
        flex-wrap: wrap;
        margin: auto;
        margin-top: 50px;
    }
    .card_it{
        width: calc(100%/4);
        margin-bottom: 10px;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
    }
</style>