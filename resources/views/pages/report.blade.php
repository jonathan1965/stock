@extends('layouts.app', [
    'namePage' => 'report',
    'class' => 'sidebar-mini',
    'activePage' => 'report',
  ])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
         
          <div class="card-header">
            <h4 class="card-title"> Zion REports</h4>
          </div>
       <div >
          <table border="0" cellspacing="5" cellpadding="5" style="padding-top: 45px">
            <tbody ><tr>
                        <td > Filter Data by Task Date</td>
                          <td style="font-size: 175%;"><i class="fa fa-calendar text-primary" aria-hidden="true"></i></td>
                          <td>
                            
                            <input type="text" autocomplete="off" id="min" name="min" class="form-control form-control-sm min">
                          </td>
                          </div>
                        </div>
                          <td style="font-size: 175%;"><i class="fa fa-calendar text-primary" aria-hidden="true"></i></td>
                          <td><input type="text" autocomplete="off" id="max" name="max" class="form-control form-control-sm min"></td>
                </tr>
              </div>     
        </tbody>
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
                  <th >Service Date</th>
                 
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
                    
                    <td>2020/05/07</td>
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
                    <td>2020/05/06</td>
                   
                  </tr>
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>



@endsection
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
{{-- Link --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/
jszip.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable();
    $.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
              var min = $('.min').datepicker("getDate");
              var max = $('#max').datepicker("getDate");
              var startDate = new Date(data[6]);
              if (min == null && max == null) {
                return true; 
                }
              if (min == null && startDate <= max) {
                 return true;
                 }
              if(max == null && startDate >= min) {
                return true;
                }
              if (startDate <= max && startDate >= min) {
                 return true;
                  }
              return false;
          }
          );

              $("#min").datepicker({
                 onSelect: function () { 
                   table.draw(); 
                   }, changeMonth: true,
                       changeYear: true 
                   });
              $("#max").datepicker({
                 onSelect: function () { 
                   table.draw(); 
                   }, changeMonth: true,
                      changeYear: true 
                      });
              var table = $('#example').DataTable();

              // Event listener to the two range filtering inputs to redraw on input
              $('#min, #max').change(function () {
                  table.draw();
              });
             


  });
</script>


