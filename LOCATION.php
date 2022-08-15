<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmTP26LthHY2FBqjSx-Ih4ToFmq3C-NKA&libraries=places"></script>
</head>
<body>
                <p>Venue Address</p>
                <input type="textarea" name="address" id="address" placeholder="Enter address" />
              </div>
              <script type="text/javascript">
                $(document).ready(function(){
                  var autocomplete;
                  var id = 'address';

                  autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)),{
                    types:['geocode'],
                  })

                });

              </script>
</body>
</html>