<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
        
    </head>
    <body class="antialiased">
        <div class="div">
            <h3 class="text-center">We will send Your Weekly report to Your Manager.</h3>
        </div>
        
        <div class="container">
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <form method="post" action="{{route('addData')}}">
        @csrf
            <h2>Employee Details</h2><br>
            <div class="form-group">
                <label>Id</label>
                <input type="number" name="e_id" class="form-control" placeholder="Enter Employee_Id">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="e_name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="e_email" class="form-control" placeholder="Enter Your Email">    
            </div>
            <div class="form-group">
                <label>Manager's Email address</label>
                <input type="email" name="manager_email" class="form-control" placeholder="Enter Manager's Email">    
            </div>
            <div class="form-group">
            <h2>Task Details</h2><br>
                <div class="form-group">
                <label>Monday</label>
                <input type="text" name="t_mon" class="form-control" placeholder="Task done by Monday">
                </div>
 
                <div class="form-group">
                <label>Tuesday</label>
                <input type="text" name="t_tue" class="form-control" placeholder="Task done by Tuesday">
                </div>
 
                <div class="form-group">
                <label>Wednesday</label>
                <input type="text" name="t_wed" class="form-control" placeholder="Task done by Wednesday">
                </div>
 
                <div class="form-group">
                <label>Thursday</label>
                <input type="text" name="t_thu" class="form-control" placeholder="Task done by Thursday">
                </div>
 
                <div class="form-group">
                <label>Friday</label>
                <input type="text" name="t_fri" class="form-control" placeholder="Task done by Friday">
                </div>
            </div>
            <div class="form-group">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        </div>
    </body>
</html>