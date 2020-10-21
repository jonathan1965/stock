@extends('layouts.app', [
  'namePage' => 'sales',
  'class' => 'sidebar-mini',
  'activePage' => 'sales',
])


@section('content')
  <div class="panel-header">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <button type="button" class="btn btn-primary btn-round text-white pull-right" data-toggle="modal" data-target="#myModal">{{ __('Add new Sales') }}</button>
            <h4 class="card-title">{{ __('Sales') }}</h4>
            <div class="col-12 mt-2">
              @include('alerts.success')
              @include('alerts.errors')
            </div>
          </div>
            {{-- -NEW ENTRY --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <h4 class="modal-title" id="myModalLabel">New Sales</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}  
        <div id="entries_list"></div>
      <div class="modal-body">
         <div class="row"><div  class="col-5">
          <div class="form-group">
            <label for="client"><i class="fas fa-user-shield text-primary"></i> Client</label>
            <select class="form-control" name="client" id="client" required="required">
             
              <option disabled="" selected="">Choose Option</option>
              
              <option value=""> </option>
              
              <option value=""></option>
              
            </select>
          </div>
          

          <div class="file-field">
            <div class="z-depth-1-half mb-4">
              <img src="https://lh3.googleusercontent.com/EbXw8rOdYxOGdXEFjgNP8lh-YAuUxwhOAe2jhrz3sgqvPeMac6a6tHvT35V6YMbyNvkZL4R_a2hcYBrtfUhLvhf-N2X3OB9cvH4uMw=w1064-v0" class="img-fluid"
                alt="example placeholder" style="max-width: 80%; border-radiu: 100px">
            </div>
            
              <div class="">
                <label for="title"><i class="fas fa-file-image text-primary"></i> Add Image</label>
                <input type="file" class="" class="" name="image" id="image">
              </div>
            
          </div>

          </div>
         <div  class="col-7">
          <div class="form-group">
            <label for="title"><i class="fas fa-tachometer-alt text-primary"></i> Name Bland</label>
            <input type="text" class="form-control" name="Name_Bland" id="Name_Bland" placeholder="Name_Bland">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-calendar text-primary"></i> Type</label>
            <input type="etxt" class="form-control" name="Type" id="Type" placeholder="Type">
          </div>
          <div class="form-group">
            <label for="title"><i class="fa fa-money-bill text-primary"></i> Size</label>
            <input type="number" class="form-control" name="Size" id="Size" placeholder="Amount">
          </div>
          <div class="form-group">
            <label for="title"><i class="fas fa-sort-numeric-down text-primary"></i> Service Date</label>
            <input type="date" class="form-control" name="Service_Date" id="Service_Date" >
          </div>
          </div>
          
          </div>
          <div class="row ">
            <div class="col-12">
              <div class="" style="padding: 20px 0px 0px 0px;">
                <label for="title"><i class="fa fa-file text-primary"></i> Comments</label>
                <div style="width: 200px;">
                <textarea name="comments" id="comments" width="300" rows="6" cols="50"></textarea>
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

          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>{{ __('icon') }}</th>
                  <th>{{ __('Name Bland')}}</th>
                  <th>{{ __('type')}}</th>
                  <th>{{ __('size')}}</th>
                  <th>{{ __('Quantity')}}</th>
                  <th class="disabled-sorting text-right">{{ __('Actions')}}</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>{{ __('icon') }}</th>
                  <th>{{ __('Name Bland') }}</th>
                  <th>{{ __('type') }}</th>
                  <th>{{ __('size') }}</th>
                  <th>{{ __('Quantity') }}</th>
                  <th ></th>
                  
                </tr>
              </tfoot>
              <tbody>
                
                  <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="data:image/jpeg;base64,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" alt="" style="max-width: 20%; border-radius: 100px">
                      </span>
                    </td>
                    <td>Polo</td>
                    <td>Polo</td>
                    <td>S</td>
                    <td>200P</td>
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
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="data:image/jpeg;base64,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" alt="" style="max-width: 20%; border-radius: 100px">
                      </span>
                    </td>
                    <td>Polo</td>
                    <td>Polo</td>
                    <td>S</td>
                    <td>200P</td>
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
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>

 
@endsection


  <script>
    $(document).ready(function() {
      $(".delete-button").click(function(){ 
        var clickedButton = $( this );
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: 'Yes, delete it!',
        buttonsStyling: false
      }).then((result) => {
        if (result.value) {
          clickedButton.parents(".delete-form").submit();
        }
      })

      })
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  
