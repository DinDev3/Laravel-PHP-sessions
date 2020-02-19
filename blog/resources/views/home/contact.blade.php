<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
    </head>
    <body>
        <!-- <h1>Informatics Institute of Technology</h1>
        <h3>7, Ramakrishna Road, Colombo 06, Sri Lanka</h3>
        <p> Contact page </p>
        <p> Contact details ... </p>
        <p> email : iit@iit.ac.lk </p> -->


        @extends('./home/master')

        @section('content')

            <!-- Passing values from template-->

            <!-- <?php
            // echo $title;
            // ?>
            </p> -->

            <!-- Passing array from template -->
            <ul>
            @foreach($contacts as $name)
                <li> {{$name}}</li>
            @endforeach
            </ul>


            <p> Contact page </p>
            <p> Contact details ... </p>
        @endsection
    </body>
</html>