<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<style>
    .boot{
        padding-top: 30px;
    }
  
</style>

<body>
    <div class="container boot">
        <div class="row">
            <div class="col-md-4 img">
                <img src="https://source.unsplash.com/random/1"
                    height="200" width="250" class="img-rounded">
            </div>

            <div class="col-md-4 details">
                <blockquote>
                    <h5>Fiona Gallagher</h5>
                    <small><cite title="Source Title">Chicago, United States of America <i
                                class="icon-map-marker"></i></cite></small>
                </blockquote>

                <h3 class="text-secondary">Users Information</h3>
                
                    <h4>Email: <strong>{{ $info->email }}</strong> </h4> 
                     <p>First Name: <strong>{{ $info->fname }}</strong>  </p>
                    <p> Last Name: <strong> {{  $info->lname }}</strong></p>
                
            </div>

            <div class="col-md-3">
                <div >
                    
                    <a class="btn btn-primary" href=" {{ url('pdfdownload/'.$info->id) }} ">Save As PDF</a>
                 
                </div>
            </div>

           
        </div>
    </div>

</body>
</html>
