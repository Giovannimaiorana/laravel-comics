<header>
    <div class="container_link">
        <nav>
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <ul>
        
         @foreach ($navlist as $element)
                <a  href="http://127.0.0.1:8000{{$element['href']}}">{{$element['text']}}</a>
         @endforeach
         </ul>
        </nav>
    </div>

</header>
<style scoped lang="scss">
    
    .container_link{
      
        width: 100%;
    }
 img{
        width:50px;
    }
 nav{
    display:flex;
    align-items:center;
 }
    ul{
        list-style:none;
        display: flex;
    }
    a{
        text-decoration: none;
        color: black;
        margin-right: 20px;
    }
  

</style>