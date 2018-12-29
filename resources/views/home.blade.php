@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="/css/pages/home.css">
@stop

@section('body')
  <div id="home-page">
    <div class="container">
      <div class="content">
        <div class="identity">
          <h1 class="app-name">{{ APP_NAME }}</h1>
          <small class="title">Full-Stack Web Developer</small>
        </div>
        <ul class="links row">
          <li class="link-item upwork col-md-4 offset-md-2">
            <a class="hover-only" href="{{ MESI_UPWORK }}" target="_blank" rel="noopener">
              <img src="/images/upwork.png" alt="{{ APP_NAME }} Upwork account">
              upwork.com/fl/mesiaserwin
            </a>
            <small class="caption">Hire me</small>
          </li>
          <li class="link-item mail col-md-4">
            <a class="hover-only" href="mailto:{{ MESI_GMAIL }}" target="_blank" rel="noopener">
              <i class="fa fa-envelope mr-1"></i>{{ MESI_GMAIL }}
            </a>
            <small class="caption">Contact me</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
@stop