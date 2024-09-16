@extends('layouts/main_layout')

@section('content')
<?php use \App\Http\Controllers\Controller; ?>
<div class="hero-wrapper page-heading">
    <div class="container hero-container center">
        <div data-w-id="32ae9b0d-927c-1bbf-aa56-10f981980ee1" class="hero-info center">
            <h1 data-w-id="32ae9b0d-927c-1bbf-aa56-10f981980ee2" class="heading">Viewing Impact Gallery<br/></h1>
            <p data-w-id="32ae9b0d-927c-1bbf-aa56-10f981980eec" class="hero-copy center">
                {{$dname}}         
            </p>
            <div class="breadcrumbs dark">
                <a href="javascript:;" class="breadcrumbs-link">The Foundation</a>
                <div class="breadcrumbs-arrow"></div>
                <a href="{{url('impact-gallery')}}" class="breadcrumbs-link">Impact Gallery</a>
                <div class="breadcrumbs-arrow"></div>
                <div class="subpage-title">View Gallery</div>
            </div>
        </div>
    </div>
</div>

<div class="section gray wf-section">
    <div class="slideshow-container">
        <div class="slideshow" data-transition="fade">
        <?php $count=count($gallery); if (count($gallery)) { foreach ($gallery as $key => $value) {?>
            <input type="radio" name="ss2" id="ss2-item-{{$count}}" class="slideshow--bullet" checked="checked" />
            <div class="slideshow--item"> 
                <img src="{{url('storage/gallery/'.$dname.'/'.$value)}}" />
                <label for="ss2-item-{{$count-1}}" class="slideshow--nav slideshow--nav-previous">Go to slide 3</label>
                <label for="ss2-item-{{$count+1}}" class="slideshow--nav slideshow--nav-next">Go to slide 2</label>
            </div>
        <?php $count--;} }?>
        </div>
    </div>
</div>




<style>
    .slideshow {
        width: 40%;
        height: 300px;
        position: relative;
        text-align: center;
        line-height: 400px;
        padding-bottom: 30px;
        margin: 0 auto;
        transition: all 0.5s ease;
    }
    /* slideshow item */
    .slideshow--item {
        width: 100%;
        height: 300px;
        line-height: 1.5;
        position: absolute;
        top: 0;
        overflow: hidden;
        visibility: hidden;
    }
    .slideshow--item img {
        width: 100%;
        height: auto;
        
    }
    .slideshow--bullet:checked + .slideshow--item {
        visibility: visible;
    }
    .slideshow[data-transition="fade"] .slideshow--item {
        visibility: visible;
        opacity: 0;
        transition: .3s ease-out opacity;
    }
    .slideshow[data-transition="fade"] .slideshow--bullet:checked + .slideshow--item {
        opacity: 1;
    }
    /* slideshow navigation */
    .slideshow--nav {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 50%;
        display: none;
        z-index: 88;
        cursor: pointer;
        color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .slideshow--nav:after {
        display: block;
        content: '\25B6';
        font-size: 1.2em;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        height: 50px;
        top: 50%;
        right: -35px;
        padding-right:40px;
        padding-top: 25px;
        padding-left: 10px;
        border-radius: 50%;
        margin-top: -1.5em;
        transition: all 0.5s ease;
    }
    .slideshow--nav:hover:after {
        background-color: rgba(0, 0, 0, 0.8);
    }
    .slideshow--nav-previous {
        left: -45px;
        display: block;
    }
    .slideshow--nav-previous:after {
        -webkit-transform: scaleX(-1);
        -moz-transform: scaleX(-1);
        transform: scaleX(-1);
        right: auto;
        left: 10px;
    }
    .slideshow--nav-next {
        left: 50%;
        display: block;
    }
    /* Radiobuttons to control the slideshow */
    .slideshow--bullet {
        font-size: .75em;
        width: 8px;
        height: 8px;
        display: inline-block;
        position: relative;
        margin: 8px 8px -120px;
        z-index: 99;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: #8d8d8d;
        border-radius: 50%;
        transition: all 0.5s ease;
        visibility: hidden;
    }
    .slideshow--bullet:checked {
        background: #333;
        outline: none;
    }
    .button-container {
        padding: 20px;
    }
    .folio-button {
        margin: 0 auto;
        padding: 5px 10px;
        background-color: #91B0A5;
        border-radius: 4px;
        color: #333;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        transition: all 0.3s ease;
    }
    .folio-button:hover {
        background-color: #B0D6C9;
    }
    @media only screen and (max-width: 980px) {
        .slideshow {
            width: 100%;
            height: 200px;
        }
        .slideshow--bullet {
            margin: 8px 8px -110px;
        }
        .button-container {
            margin-top: 80px;
        }
    }
    @media only screen and (max-width: 402px) {
        .slideshow {
            width: 100%;
            height: 150px;
        }
        .slideshow--bullet {
            margin: 8px 8px -100px;
        }
            .button-container {
            margin-top: 120px;
        }
    }

</style>
@endsection
