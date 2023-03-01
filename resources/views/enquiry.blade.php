<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <script src="/js/validation.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="{{asset('asset/js/validation.js')}}"></script>

    <style>
        .margin-top{
            margin-top:30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 margin-top">
                <h3 class='center-align'>Enquiry form</h3><br>
                <form action="enquiry" id='frm'>
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name='name' class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <label class="radio-inline">
                            <input type="radio" name='gender' value="Male">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name='gender' value="Female">Female
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email id:</label>
                        <input type="text" name='email' class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" name='phone' class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="enquiry">Enquiry:</label>
                        <textarea type="text" name='enquiry' class="form-control" id="enquiry"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="source">How you heard about us:</label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name='source[]' value="News Paper">News Paper
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name='source[]' value="Weekly News Paper">Weekly News Paper
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name='source[]' value="banner">Banner
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name='source[]' value="Friend">Friend
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name='source[]' value="Internet">Internet
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                    <a href='enquiryList' class="btn btn-info">Show Enquiries</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>