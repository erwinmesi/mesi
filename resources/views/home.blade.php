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
          <li class="link-item upwork col-12">
            <a class="hover-only" href="#">
              About me
            </a>
            <span class="pipe">|</span>
            <a class="hover-only" href="#">
              Blog
            </a>
            <span class="pipe">|</span>
            <a class="hover-only" href="#">
              Projects
            </a>
          </li>
          <li class="link-item upwork col-md-4 offset-md-2">
            <small class="caption">
              <img src="/images/upwork.png" alt="{{ APP_NAME }} Upwork account">
              Hire me at Upwork
            </small>
            <a class="hover-only contact" href="{{ MESI_UPWORK }}" target="_blank" rel="noopener">
              upwork.com/fl/mesias
            </a>
          </li>
          <li class="link-item mail col-md-4">
            <small class="caption"><i class="fa fa-envelope mr-2"></i>Contact me at</small>
            <a class="hover-only contact" href="mailto:{{ MESI_GMAIL }}" target="_blank" rel="noopener">
              {{ MESI_GMAIL }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@stop