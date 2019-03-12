@include('/template/header')

<body>

<div class="etiqueta-default etiqueta-agregarPromo" style="margin-top: 25px;">
    <span class="etiqueta-texto">AÑADIR NEGOCIO</span>
</div>

<form action="/nuevoest" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container form-group col-md-5 mt-2 pt-4">
        <input type="text" class="form-control" name="nombre_est" placeholder="Nombre del establecimiento">
    </div>

    <div class="container form-group col-sm-5">
        <label>
            <select class="form-control" name="tipoN" required>
                <option selected disabled>Tipo de negocio</option>
                @foreach ($negocio as $negocios)
                    <option value="{{$negocios -> id_n}}">{{$negocios -> tipo_n}}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div class="container form-group col-md-5">
        <input id="pac-input" type="text" class="form-control controls" name="dirEst" placeholder="Dirección" required>
    </div>

    <!-- Google Maps -->
    <div class="google-container container col-md-5">
        <!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
        <div id="map"></div>

        <script type="text/javascript" src={{url('/js/googlemaps.js')}}></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTJl1g8Z3sSBub92HhdfR3K-zs93UtV6o&libraries=places&callback=initAutocomplete"
                async defer></script>
    </div>
    <!--  Fin Google Maps -->

    <div class="container form-group col-md-5 pt-3">
        <input type="text" class="form-control" name="faceEst" placeholder="Facebook (Enlace)" required>
    </div>

    {{-- IMÁGEN --}}
    <div class="container form-group col-md-5">
        {!! Form::label('imagen_establecimiento', 'Imágen para mostrar', ['class' => 'font-weight-bold']) !!}
        <br>
        <div class="container pt-2 pb-2 border">
            {!! Form::file('imagen_establecimiento') !!}
        </div>
    </div>

    <div class="container form-group col-md-2">
        <button type="submit" class="form-control " name="addn-submit">AÑADIR</button>
    </div>
    </div>
</form>

</div>

</body>

@include('/template/footer')