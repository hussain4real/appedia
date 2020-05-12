<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Monthly Report</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      @if (session()->has('success_message'))
      <div class="alert alert-success">
         {{ session()->get('success_message') }}
      </div>
      @endif

      @if(count($errors) > 0)
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
   </div>
   <h2 class="text-center text-xl mb-10">Monthly Financial Report</h2>
   <table class="table table-striped">
      <thead>
         <tr>
            <td><b>Month</b></td>
            <td><b>Total Orders</b></td>
            <td><b>Total Income</b></td>
            <td><b>Average Order</b></td>

         </tr>
      </thead>
      <tbody>
         @foreach ($months as $month)



         <tr>
            <td>
               {{ $month->months }}

            </td>
            <td>
               {{$month->total}}
            </td>
            <td>
               QAR {{ $month->sums }}

            </td>
            <td>
               QAR {{$month->average}}
            </td>

         </tr>

         @endforeach
      </tbody>
   </table>

</body>

</html>