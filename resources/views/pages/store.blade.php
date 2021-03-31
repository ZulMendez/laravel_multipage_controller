@extends('layouts.index')

@section('content')
<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">Come On In</span>
              <span class="section-heading-lower">We're Open</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                Sunday
                <span class="ml-auto">Closed</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Monday
                <span class="ml-auto">7:00 AM to 8:00 PM</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Tuesday
                <span class="ml-auto">7:00 AM to 8:00 PM</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Wednesday
                <span class="ml-auto">7:00 AM to 8:00 PM</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Thursday
                <span class="ml-auto">7:00 AM to 8:00 PM</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Friday
                <span class="ml-auto">7:00 AM to 8:00 PM</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Saturday
                <span class="ml-auto">9:00 AM to 5:00 PM</span>
              </li>
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$address->text1}}</strong>
                <br>
                {{$address->text2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$address->text3}}</em>
              </small>
              <br>
              {{$address->num}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$end->titre}}</span>
                <span class="section-heading-lower">{{$end->sousTitre}}</span>
              </h2>
              <p>{{$end->texte1}}</p>
              <p class="mb-0">{{$end->texte2}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection