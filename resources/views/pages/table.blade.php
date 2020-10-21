@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'table',
  ])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-footer ">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="modal" data-target="#myModal">{{__('Create Entry')}}</button>
          </div>

          {{-- -NEW ENTRY --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">New Entry</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data"> 
        <div id="entries_list"></div>
      <div class="modal-body">
         <div class="row"><div  class="col-5">
          <div class="form-group">
            <label for="client"><i class="fas fa-user-shield text-primary " ></i> Client</label>
            <select class="form-control" name="client" id="client" required="required">
              <option disabled="" selected="">Choose Option</option> 
              <option value=""> </option>
              <option value=""> </option>
            </select>
          </div>
          <div class="form-group">
            <label for="Type"><i class="fa fa-car text-primary"></i> Vehicle</label>
            <select class="form-control" name="vehicle" id="vehicle" required="required">
              <option disabled="" selected="">Choose Option</option>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-tasks text-primary"></i> Service</label>
            <select class="form-control" name="service" id="service">
              <option disabled="" selected="">Choose Option</option>
              <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-gas-pump text-primary"></i> Fuel(L)</label>
            <input type="text" class="form-control" name="fuel" id="fuel" placeholder="Fuel(L)">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-gas-pump text-primary"></i> Driver</label>
            <input type="text" class="form-control" name="driver" id="fuel" placeholder="Driver">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-file text-primary"></i> File</label>
            <input type="file" class="form-control" name="file" id="file">
          </div>
          </div>
         <div  class="col-7">
          <div class="form-group">
            <label for="title"><i class="fas fa-tachometer-alt text-primary"></i>Odometer Reading(km)</label>
            <input type="text" class="form-control" name="odometer_reading" id="odometer_reading" placeholder="Odometer Reading">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-calendar text-primary"></i> Service Date</label>
            <input type="date" class="form-control" name="service_date" id="service_date">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-money-bill text-primary"></i> Amount(Rwf)</label>
            <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount">
          </div>
          <div class="form-group">
            <label for="title"><i class="fas fa-sort-numeric-down text-primary"></i> Invoice Number</label>
            <input type="text" class="form-control" name="invoice_number" id="amount" placeholder="Invoice Number">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-map-marker text-primary"></i> Location</label>
            <select class="form-control" name="location" id="location">
              <option disabled="" selected="">Choose Option</option>
              <option value=""></option>     
            </select>
          </div>
          <div class="form-group">
            <label for="title"><i class="fas fa-file-image text-primary"></i> Invoice Image</label>
            <input type="file" class="form-control" name="image" id="image">
          </div>
          </div>   
          </div>
          <div class="row">
            <div class="col-12">
              <div class="">
                <label for="title"><i class="fa fa-file text-primary"></i> Comments</label>
                <div style="width: 200px;">
                <textarea name="comments" id="comments" width="200" rows="6" cols="50"></textarea>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <div class="card-header">
      <h4 class="card-title"> Entries</h4>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-hover" >
                <thead class=" text-primary">
                  <th>
                    Company
                  </th>
                  <th>
                    Bland
                  </th>
                  <th>
                    Type
                  </th>
                  <th >
                    size
                  </th>
                  <th >
                    Quantity
                  </th>
                  <th >
                    Price
                  </th>
                  <th class="disabled-sorting text-right">{{ __('Actions') }}</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Zion
                    </td>
                    <td>
                      Polo
                    </td>
                    <td>
                      T-shirt
                    </td>
                    <td >
                      M
                    </td>
                    <td >
                      1000 P
                    </td>
                    <td >
                      5000,000 Rwf
                    </td>
                    
                    <td class="text-right">
                        <a type="button" href="" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                          <i class="now-ui-icons ui-2_settings-90"></i>
                        </a>
                        @method('delete')
                        <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm delete-button" data-original-title="" title="" onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Zion
                    </td>
                    <td>
                      A
                    </td>
                    <td>
                      Lacoste
                    </td>
                    <td >
                      XXL
                    </td>
                    <td >
                      500 P
                    </td>
                    <td >
                      100,000 Rwf
                    </td>
                    
                    <td class="text-right">
                        <a type="button" href="" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                          <i class="now-ui-icons ui-2_settings-90"></i>
                        </a>
                        @method('delete')
                        <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm delete-button" data-original-title="" title="" onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>

   {{-- edit --}}
   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
  
          <h4 class="modal-title" id="myModalLabel">Edit Entry</h4>
        </div>
        <form action="" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
           <input type="hidden" name="entry_id" id="cat_id" value="">
           <div class="row"><div  class="col-5">
            <div class="form-group">
              <label for="client"><i class="fas fa-user-shield text-primary"></i> Client</label>
              <select class="form-control" name="client" id="client">
               
                <option value=""></option>
             
              
                <option value=""></option>
               
              </select>
            </div>
            <div class="form-group">
              <label for="Type"><i class="fa fa-car text-primary"></i> Vehicle</label>
              <select class="form-control" name="vehicle" id="vehicle">
                <option disabled="" selected="">Choose Option</option>
               
                <option value=""></option>
               
              </select>
            </div>

            <div class="form-group">
              <label for="title"><i class="fa fa-tasks text-primary"></i> Service</label>
              <select class="form-control" name="service" id="service">
                <option disabled="" selected="">Choose Option</option>
                
                <option value=""></option>
               </select>
            </div>
            <div class="form-group">
              <label for="title"><i class="fa fa-gas-pump text-primary"></i> Fuel(l)</label>
              <input type="text" class="form-control" name="fuel" id="fuel" placeholder="Fuel(L)">
            </div>
            <div class="form-group">
              <label for="title"><i class="fas fa-hdd text-primary"></i> Driver</label>
              <input type="text" class="form-control" name="driver" id="driver" placeholder="Driver">
            </div>
            <div class="form-group">
              <label for="title"><i class="fa fa-file text-primary"></i> File</label>
              <input type="file" class="form-control" name="file" id="file">
            </div>
            </div>
           <div  class="col-7">
            <div class="form-group">
             <label for="title"><i class="fas fa-tachometer-alt text-primary"></i> Odometer Reading(km)</label>
              <input type="text" class="form-control" name="odometer_reading" id="odometer_reading" placeholder="">
            </div>
            <div class="form-group">
              <label for="title"><i class="fa fa-calendar text-primary"></i> Service Date</label>
              <input type="date" class="form-control" name="service_date" id="service_date">
            </div>
            <div class="form-group">
              <label for="title"><i class="fa fa-money-bill text-primary"></i>  Amount</label>
              <input type="text" class="form-control" name="amount" id="amount">
            </div>
            <div class="form-group">
              <label for="title"><i class="fas fa-sort-numeric-down text-primary"></i> Invoice Number</label>
              <input type="text" class="form-control" name="invoice_number" id="amount">
            </div>
            <div class="form-group">
              <label for="title"><i class="fa fa-map-marker text-primary"></i> Location</label>
              <select class="form-control" name="location" id="location">
                <option disabled="" selected="">Choose Option</option>
               
                <option value=""></option>
             
              </select>
            </div>

            <div class="form-group">
              <label for="title"><i class="fas fa-file-image text-primary"></i> Invoice Image</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>

            </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="">
                  <label for="title"><i class="fa fa-file text-primary"></i> Comments</label>
                  <div style="width: 200px;">
                  <textarea name="comments" id="comments" width="200" rows="6" cols="50"></textarea>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>



@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>


