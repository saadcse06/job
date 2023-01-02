<?php
/**
 * Created by PhpStorm.
 * User: BANBEIS-AP
 * Date: 6/24/2022
 * Time: 6:25 AM
 */
?>
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1 class="pb-5">JOB Dashboard</h1>

@include('home/application')
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Welcome to JOB Admin. Login to view the data.</p>
        @endguest
    </div>
@endsection
