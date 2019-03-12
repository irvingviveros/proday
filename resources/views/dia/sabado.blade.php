@include('/template/header')

<body>
  
  <div class="etiqueta-default bg-light mt-4">
    <span class="etiqueta-texto">SÁBADO</span>
  </div>

  <div class="container mt-4 pt-3 pb-3 link-color card-width">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="rest-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurante</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cafe-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Café</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="bar-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bar</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="rest-tab">

        {{-- despliega los restaurantes que esten el día lunes --}}

      </div>

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="cafe-tab">

        {{-- despliega las cafeterias que estén el dia lunes --}}

      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="bar-tab">

        {{-- despliega los bares que estén el dia lunes --}}

      </div>
    </div>
  </div>



</body>

@include('template/footer')