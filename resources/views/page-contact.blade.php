@include('partials.head')
@include('partials.header')
@php $contact = get_field('coordonnees') @endphp
<div class="wrap-contact">
  @foreach($contact as $coordonnees)
    <div class="coordonnees">
      <img src="{{$coordonnees['picto']}}" alt="">
      <p>{{$coordonnees['contact_infos']}}</p>
    </div>
  @endforeach
</div>
@include('partials.footer')
