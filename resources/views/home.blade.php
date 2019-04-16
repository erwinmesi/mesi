@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="/css/pages/home.css">
@stop

@section('body')
  <div id="home-page">
    <div class="container">
      <div class="content">
        <div class="identity text-center">
          <img draggable="false" class="logo" src="/images/logo.png" alt="{{ APP_NAME }} Logo">
        </div>
        <div class="text-center mb-4">
          <small class="d-block">Erwin Mesias</small>
          <small class="d-block">Full-Stack Web Developer</small>
        </div>
        <ul class="links row text-center">
          <li class="link-item upwork col-md-4">
            <a class="hover-only contact" href="{{ MESI_UPWORK }}" target="_blank" rel="noopener">
              <img draggable="false" src="/images/upwork.png" alt="{{ APP_NAME }} Upwork account">
            </a>
            <small class="caption">Hire me.</small>
          </li>
          <li class="link-item mail col-md-4">
            <a class="hover-only contact" href="mailto:{{ MESI_GMAIL }}" target="_blank" rel="noopener">
              <img draggable="false" src="/images/gmail.png" alt="{{ APP_NAME }} Gmail account">
            </a>
            <small class="caption">Send me an email.</small>
          </li>
          <li class="link-item linkedin col-md-4">
            <a class="hover-only contact" href="{{ MESI_LINKEDIN }}" target="_blank" rel="noopener">
              <i class="fa fa-linkedin fa-2x"></i>
            </a>
            <small class="caption">Connect with me.</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
@stop