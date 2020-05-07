<div class="container-prodotto">
     <div class="titolo-prodotto clearfix">

          <h1>{{$products['titolo']}}</h1>
          <img class="responsive contain" src="{{$products['src-h']}}" alt="">
          <img class="responsive contain" src="{{$products['src-p']}}" alt="">
          <article class="descrizione">
          <p>
               {!!$products['descrizione']!!}
          </p>
          </article>
     </div>
</div>
