@extends('layouts.layout_general')
@section('page_title','Comics')

@section ('content')
<div class="container_series">
    <span>CURRENT SERIES</span>
    <div class="card_film">
        @foreach ($serieslist as $element)
            <div class="card_ite">
                <img src="{{$element['thumb']}}">
                <h3>{{$element['title']}}</h3>
            </div>

        @endforeach
    </div>
 
</div>
@endsection

<style lang="scss" scoped>
    .container_series{
        width: 90%;
        margin: auto;
    }
    .card_film{
        display: flex;
        flex-wrap: wrap;
    }
    .card_ite{
        width: calc(100%/4);
        border: 1px solid black;
        padding: 10px;
        margin-bottom: 20px;
        margin-left: 10px;
        border-radius: 10px;
        

    }

</style>