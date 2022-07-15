<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>COVID-19 API</title>
    <style>
        .card {
            margin: 400px;
            /* Added */
            float: left;
            /* Added */
            margin-bottom: 105px;
            /* Added */
        }

    </style>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h4 class="text-center">SICOVID (Sistem Informasi COVID)</h4>
                <div class="card mt-4 " style="width: 18rem;">

                    <div class="col text-center"><img src="{{ asset('img/covid.png') }}" width="120px" class="gambar"
                            alt="..."></div>
                    <div class="card-body">
                        <h4 class="card-title text-center">COVID-19</h4>
                        <p class="card-text">Corona virus adalah virus flu yang sedang mewabah di dunia.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <h4>{{ $listdata['location'] }}</h4>
                        </li>
                        <li class="list-group-item text-center text-primary">
                            <h4>{{ $listdata['confirmed'] }}</h4>
                        </li>
                    </ul>
                    <div class="card-body">
                        <table width="100%">

                            <tr>
                                <th>
                                    <h6>Meninggal</h6>
                                </th>
                                <th>
                                    <h6>Sembuh</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="text-danger">{{ $listdata['deaths'] }}</h6>
                                </td>
                                <td>
                                    <h6 class="text-success">@if (isset($listdata['recovered'])) @else NULL @endif</h6>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer text-center">
                        Data di update
                        <h6>{{ Carbon\Carbon::parse($listdata['lastReported'])->diffForHumans()  }}</h6>
                    </div>
                    <div class="text-center" >
                        <small>
                            © 2022 Copyright:
                            <div class="div"><img src="{{ asset('img/github.png') }}" width="25px" alt="Github"> <a class="text-dark" href="https://github.com/mohagungnursalim">github.com/mohagungnursalim</a></div>                     
                        </small>
                       
                    </div>
                    {{-- <h5 class="card-title">{{ $listdata['country'] }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Terkonfirmasi <code> {{ $listdata['confirmed'] }}</code></li>
                    <li class="list-group-item">Sembuh @if (isset($listdata['recovered'])) {{ $listdata['deaths'] }}
                        @else NULL @endif</li>
                    <li class="list-group-item">Meninggal <code>{{ $listdata['deaths'] }}</code></li>
                </ul>
                <div class="card-body">
                    <a href="https://covid19.who.int/" class="btn btn-primary">COVID-19 WHO</a>
                    <a href="#" class="btn btn-dark">Back</a>
                </div> --}}

            </div>

            <div class="col"></div>
        </div>

    </div>

</body>





</html>
