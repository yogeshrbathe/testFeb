<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>List of Enquiries</h3>
                <h4>Search By: Birth Date</h4>
                <form action="enquiryList" id='frm' method='post'>
                    @csrf
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="from_date">From Date:</label>
                            <input type="date" name='from_date' class="form-control" value="{{$from}}" id="from_date">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="to_date">To Date:</label>
                            <input type="date" name='to_date' class="form-control" value="{{$to}}" id="to_date">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success pull-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <table id="example" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Email Id</th>
                            <th>Phone</th>
                            <th>Enquiry</th>
                            <th>Source</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->gender}}</td>
                            <td>{{date('d-M-Y',strtotime($value->birth_date))}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->enquiry}}</td>
                            <td>{{$value->source}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script> -->
</body>

</html>