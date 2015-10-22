@extends('orchestra/foundation::layouts.page')

@section('navbar')
    @include('blupl/management::widgets.header')
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th></th>
            <th>Number of Entries</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Match Referee</td>
            <td></td>
        </tr>
        <tr>
            <td>Umpire</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
        </tbody>
    </table>
@stop