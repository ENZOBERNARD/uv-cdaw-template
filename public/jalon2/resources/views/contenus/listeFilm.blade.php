@extends('templates.template')
@php
$lenght = count($films);
echo $films[0]->TITRE
@endphp

@section('content')
<link rel="stylesheet" href="css/listefilm.css" media="screen">
<link rel="stylesheet" href="css/listefilm2.css" media="screen">
>
<section class="u-clearfix u-section-1" id="sec-a5e1">

    @for ($i = 0; $i < $lenght; $i++) @php $modulo=$i%8 @endphp @if($modulo==0) <div
        class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
            @endif

            <div class="u-container-layout u-container-layout-1" style="margin-right:20px">
                <img class="u-expanded-width u-image u-image-default u-image-1" src="assets/avatar.jpg" alt=""
                    data-image-width="1280" data-image-height="853" width="150" height="250">
                <p class="u-align-center u-text u-text-1"> {{$films[$i]->TITRE}}</p>
                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-align-left u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                                <a href="https://nicepage.com/k/portfolio-html-templates"
                                    class="u-border-2 u-border-hover-palette-3-base u-border-palette-1-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-2-base u-btn-1"><span
                                        class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px"
                                            y="0px" style="width: 1em; height: 1em;">
                                            <path
                                                d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268 c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514 c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482 s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514 C512,93.417,453.532,30,376,30z">
                                            </path>
                                        </svg><img></span>
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                                <a href="https://nicepage.com/k/portfolio-html-templates"
                                    class="u-border-2 u-border-hover-palette-3-base u-border-palette-1-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-2-base u-btn-2"><span
                                        class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 96 96"
                                            style="width: 1em; height: 1em;">
                                            <path
                                                d="M48,20c21.15,0,34.502,19.998,38.998,28C82.494,56.016,69.145,76,48,76C26.853,76,13.503,56.118,9.003,48.149  C13.5,40.101,26.853,20,48,20 M48,12C16,12,0,48.166,0,48.166S16,84,48,84s48-36,48-36S80,12,48,12L48,12z">
                                            </path>
                                            <path
                                                d="M48,40c4.411,0,8,3.589,8,8s-3.589,8-8,8s-8-3.589-8-8S43.589,40,48,40 M48,32c-8.836,0-16,7.164-16,16  c0,8.837,7.164,16,16,16c8.837,0,16-7.163,16-16C64,39.164,56.837,32,48,32L48,32z">
                                            </path>
                                        </svg><img></span>
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                                <a href="https://nicepage.com/k/portfolio-html-templates"
                                    class="u-border-2 u-border-hover-palette-3-base u-border-palette-1-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-2-base u-btn-3"><span
                                        class="u-icon u-icon-3"><svg class="u-svg-content" viewBox="0 0 512 512"
                                            style="width: 1em; height: 1em;">
                                            <polygon
                                                points="448,224 288,224 288,64 224,64 224,224 64,224 64,288 224,288 224,448 288,448 288,288 448,288 ">
                                            </polygon>
                                        </svg><img></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($modulo==7)
        </div>
        </div>
        @endif
        @endfor


</section>
<script>




</script>

@stop()