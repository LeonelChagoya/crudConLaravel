<br>
<h1>{{$modo}} producto</h1>

@if(count($errors)>0)
       
       <div class="alert alert-danger" role="alert">
        <ul>
       @foreach( $errors->all() as $error)
     <li> {{$error}}</li>

      @endforeach
      </ul>
       </div>
      
@endif




    <div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type='text' name="Nombre" value="{{isset($producto->Nombre)?$producto->Nombre:old('Nombre') }}" id="Nombre"  class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Descripción"> Descripción</label>
    <input type='text' name="Descripción" value="{{isset($producto->Descripción)?$producto->Descripción:old('Descripción')}}" id="Descripción" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Precio"> Precio </label>
    <input type='text' name="Precio" value="{{isset($producto->Precio)?$producto->Precio:old('Pricio')}}" id="Precio" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Stock"> Stock</label>
    <input type='text' name="Stock" value="{{isset($producto->Stock)?$producto->Stock:old('Stock')}}"  id="Stock" class="form-control">
    <br>
    </div>
    <div class="form-group">
    <label for="Foto"> </label>
   @if(isset($producto->Foto))
   
    <img src="{{asset('storage').'/'.$producto->Foto}}" alt="" width="150"
    class="img-thumbnail img-fluid"
    >
    @endif
    </div>
    <br>
    <div class="form-group">
    <input type='file' name="Foto" value="" id="Foto" class="form-control"> 
    <br>
    </div>

    <input type='submit' value='{{$modo}} datos'  class="btn btn-secondary" >
    <a href="{{url('producto/')}}"  class="btn btn-primary" >Regresar</a>
    <br>
   