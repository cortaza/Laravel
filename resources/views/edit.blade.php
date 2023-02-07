@extends('layouts.structure')
@section('title','Edit')
@section('content')
    <!-- Example Code -->    
    <form class="row g-3 needs-validation" novalidate="">
      <!--///////////////////////////////
    //-----//NOMBRE//-----//
    /////////////////////////////// -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo</font></font></label>
        <input type="text" class="form-control" id="validationCustom01" value="Mark" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      
      <!--///////////////////////////////
    //-----//APELLIDO//-----//
    /////////////////////////////// -->
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
        <input type="text" class="form-control" id="validationCustom02" value="Otto" required="">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <!--///////////////////////////////
 //-----//ESTADO//-----//
 /////////////////////////////// -->
   <div class="col-md-3">
     <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
     <select class="form-select" id="validationCustom04" required="">
       <option selected="" disabled="" value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elegir...</font></font></option>
       <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activo</font></font></option>
       <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inactivo</font></font></option>
     </select>
     <div class="invalid-feedback">
       Please select a valid state.
     </div>
   </div>
   <!--///////////////////////////////
    //-----//DURACIÒN//-----//
    /////////////////////////////// -->
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Duración</font></font></label>
        <input type="text" class="form-control" id="validationCustom02" value="Otto" required="">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
       <!--///////////////////////////////
    //-----//CREMA//-----//
    /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semaforos_id</font></font></label>
        <input type="text" class="form-control" id="validationCustom05" required="">
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
          <label class="form-check-label" for="invalidCheck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Acepto los términos y condiciones
          </font></font></label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar formulario</font></font></button>
      </div>
    </form>
    
@endsection