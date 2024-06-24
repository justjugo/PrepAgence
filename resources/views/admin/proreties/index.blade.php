@extends('admin.admin')

@section('title')
   Tous Les Biens 
@endsection

@section('link')
Properties 
@endsection


@section('action')
liste 
@endsection

@section('content')

  
<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
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
            <a href="#">Tables</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Datatables</a>
          </li>
        </ul>
      </div>
      <div class="row">
       

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Tous Les Biens</h4>
                <a
                  href="{{route('admin.proprety.create')}}"
                  class="btn btn-primary btn-round ms-auto"
                 
                >
                  <i class="fa fa-plus"></i>
                Ajouter Un Bien
              </a>
              </div>
            </div>
            <div class="card-body">
              <!-- Modal -->
              <div
                class="modal fade"
                id="addRowModal"
                tabindex="-1"
                role="dialog"
                aria-hidden="true"
              >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-0">
                      <h5 class="modal-title">
                        <span class="fw-mediumbold"> New</span>
                        <span class="fw-light"> Row </span>
                      </h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p class="small">
                        Create a new row using this form, make sure you
                        fill them all
                      </p>
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Name</label>
                              <input
                                id="addName"
                                type="text"
                                class="form-control"
                                placeholder="fill name"
                              />
                            </div>
                          </div>
                          <div class="col-md-6 pe-0">
                            <div class="form-group form-group-default">
                              <label>Position</label>
                              <input
                                id="addPosition"
                                type="text"
                                class="form-control"
                                placeholder="fill position"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Office</label>
                              <input
                                id="addOffice"
                                type="text"
                                class="form-control"
                                placeholder="fill office"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer border-0">
                      <button
                        type="button"
                        id="addRowButton"
                        class="btn btn-primary"
                      >
                        Add
                      </button>
                      <button
                        type="button"
                        class="btn btn-danger"
                        data-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table
                  id="add-row"
                  class="display table table-striped table-hover"
                >
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Surface (m²)</th>
                      <th>Prix ($)</th>
                      <th>Ville</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Titre</th>
                      <th>Surface</th>
                      <th>Prix</th>
                      <th>Ville</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                 @foreach ($properties as $preporty )
                 <tr>
                    
                    <td>{{$preporty->title}}</td>
                    <td>{{$preporty->surface}} </td>
                    <td>{{number_format($preporty->price,thousands_separator:' ')}}</td>
                    <td>{{$preporty->city}}</td>
                    <td>
                      <div class="form-button-action">
                        <a
                          href="{{route('admin.proprety.edit',$preporty)}}"
                          data-bs-toggle="tooltip"
                          title=""
                          class="btn btn-link btn-primary btn-lg"
                          data-original-title="Edit Task"
                        >
                          <i class="fa fa-edit"></i>
                      </a>
                      <form action={{route('admin.proprety.destroy',$preporty)}} method="post">
                        @csrf
                        @method('delete')

                       <button>supp</button>
                      </form>
                       
                      </div>
                    </td>
                  </tr> 
                 @endforeach
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection