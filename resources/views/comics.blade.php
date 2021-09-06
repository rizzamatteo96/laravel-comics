@extends('layouts.app')
@section('title','Dc comics')

@section('content')
<main>   
  <div class="content">
    <!-- inizio jumbotron -->
    <div class="jumbo"></div>
    <!-- fine jumbotron -->

    <div class="container">
      <!-- titolo sezione -->
      <div class="section-title">Current series</div>
      <!-- sezione delle card -->
      <div class="card-section">
        {{-- <ImgCard v-for="(card,i) in cards" :key="i" :cardData="card"/> --}}
        @foreach ($cardsData as $cardData)
          <div class="card">
            <img src="{{$cardData['thumb']}}" :alt="{{$cardData['series']}}">
            <div> {{$cardData['series']}} </div>
          </div>
        @endforeach
      </div>
      <!-- pulsante viewMore card -->
      <button class="view-more">Load more</button>
    </div>
  </div>
  
  {{-- <div class="items-shop">
    <div class="container">
    <ul>
      <li v-for="(item,i) in items" :key="i">
        <img :src="getImgUrl(item.img)" :alt="item.alt">
        <span> {{item.text}} </span>
      </li>
    </ul>
    </div>
  </div> --}}
</main>
@endsection