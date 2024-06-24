@extends('admin.admin')

@section('title')
  {{$proprety->exists ? "Editer Un Bien" : "Crèer Un Bien"}}

@endsection

@section('link')
Properties 
@endsection


@section('action')
{{$proprety->exists ? "Editer Un Bien" : "Crèer Un Bien" }}
@endsection


@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Forms</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">{{$proprety->exists ? "Editer Un Bien" : "Crèer Un Bien" }}</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">{{$proprety->exists ? "Editer Un Bien" : "Crèer Un Bien" }}</div>
            </div>
            <div class="card-body"">
                <form action="{{route($proprety->exists ? 'admin.proprety.update' : 'admin.proprety.store' ,$proprety->id)}}" method="post">
                    @csrf
                    @method($proprety->exists ?  'put' : 'post')


                   
                    @include('shared.input',['label'=>'Titre','name'=>'title','value'=>$proprety->title])

                   <div class="row">
                   
                    @include('shared.input',['class'=>'col' ,'label'=>'Surface','name'=>'surface','value'=>$proprety->surface])
                    @include('shared.input',['class'=>'col' ,'label'=>'Prix','name'=>'price','value'=>$proprety->price])
                   </div>

                   @include('shared.input',['label'=>'Description','type'=>'texterea','name'=>'description','value'=>$proprety->description])

                   <div class="row">
                    @include('shared.input',['class'=>'col' ,'label'=>'Piéce','name'=>'rooms','value'=>$proprety->rooms])
                    @include('shared.input',['class'=>'col' ,'label'=>'Chambre','name'=>'bedrooms','value'=>$proprety->bedroom])
                    @include('shared.input',['class'=>'col' ,'label'=>'Etage','name'=>'floor','value'=>$proprety->floor])
                   </div>
                 
                   <div class="row">
                    @include('shared.input',['class'=>'col' ,'label'=>'Adress','name'=>'adress','value'=>$proprety->adress])
                    @include('shared.input',['class'=>'col' ,'label'=>'Ville','name'=>'city','value'=>$proprety->city])
                    @include('shared.input',['class'=>'col' ,'label'=>'code postale','name'=>'code_postal','value'=>$proprety->code_postal])
                   </div>

                   <div class="form-check form-switch">
                    <input type="hidden" value="0" name="sold">
                    <input @checked(false) class="form-check-input" role="switch" type="checkbox" value="1" name="sold" id="sold">
                    <label for="sold" class="form-check-label">Sold</label>
                </div>
                

                    <div class="card-action">
                        <button class="btn btn-success">Ajouter</button>
                        
                    </div>
                </form>
              

            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

