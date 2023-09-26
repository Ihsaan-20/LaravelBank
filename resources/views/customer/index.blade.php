<!doctype html>
<html lang="en">

<head>
  <title>Customer</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" >


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/customer/index')}}">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/customer/index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="deposit()">Desposit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="withdrawal()">Withdrawal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="transfer()">Transfer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            
        </div>
    </nav>
  </header>
  <main>
    @include('modals.modals');
    <h1>hi Mr.Ihsaan</h1>
    <a href="{{route('customer.logout')}}">Logout</a>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <script>
    // CSRF TOKKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
  </script>
  <script>
    function transfer() {
        $('#transferModal').modal('show');

        $('#transferForm').on('submit', function (event) {
            event.preventDefault();

            var formData = new FormData(this);
            $('button[type=submit]').prop('disabled', true);


            // Send the form data to the server using AJAX
            $.ajax({
                type: "POST",
                url: "{{route('customer.transfer')}}",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response){
                  $('button[type=submit]').prop('disabled', false);
                  $('#transferModal').modal('hide');
                  $('#amount').val('');
                        // $('#myTable').load(location.href + " #myTable");
                        
                  toastr.success(response.message);
                    console.log(response);

                },
                error: function (error) {
                    // Handle errors, if any
                    console.error('Error:', error);
                }
            });


        });//main docuemnt
    }
    
    function withdrawal() {
        $('#withdrawaleModal').modal('show');

        $('#withdrawalForm').on('submit', function (event) {
            event.preventDefault();

            var formData = new FormData(this);
            $('button[type=submit]').prop('disabled', true);


            // Send the form data to the server using AJAX
            $.ajax({
                type: "POST",
                url: "{{route('customer.withdrawal')}}",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response){
                  $('button[type=submit]').prop('disabled', false);
                  $('#withdrawaleModal').modal('hide');
                  $('#amount').val('');
                        // $('#myTable').load(location.href + " #myTable");
                        
                  toastr.success(response.message);
                    console.log(response);

                },
                error: function (error) {
                    // Handle errors, if any
                    console.error('Error:', error);
                }
            });


        });//main docuemnt
    }

    function deposit() {
        $('#depositeModal').modal('show');

        $('#depositForm').on('submit', function (event) {
            event.preventDefault();

            var formData = new FormData(this);
            $('button[type=submit]').prop('disabled', true);


            // Send the form data to the server using AJAX
            $.ajax({
                type: "POST",
                url: "{{route('customer.deposit')}}",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response){
                  $('button[type=submit]').prop('disabled', false);
                  $('#depositeModal').modal('hide');
                  $('#amount').val('');

                        // $('#myTable').load(location.href + " #myTable");
                        
                  toastr.success(response.message);
                    console.log(response);

                },
                error: function (error) {
                    // Handle errors, if any
                    console.error('Error:', error);
                }
            });


        });//main docuemnt
    }

    

  </script>
  <script>
    toastr.options.closeHtml = '<button><i class="icon-off"></i></button>';
    toastr.options.closeButton = true;
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>