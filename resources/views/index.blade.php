@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col-3">#</th>
                        <th scope="col-3"> Titolo </th>
                        <th scope="col-3">Autore</th>
                        <th scope="col-3">Data di pubblicazione</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection