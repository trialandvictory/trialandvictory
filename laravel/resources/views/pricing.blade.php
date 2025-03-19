@extends('layout')
@section('custom_css')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f5f5f5;
    }

    .section {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: none;
    }

    .section:first-child {
        display: block;
    }

    .section-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Distribute products evenly */
    }

    .product {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 10px;
        width: calc(33.33% - 20px); /* Adjust width as needed, subtract padding */
        margin-bottom: 20px;
        box-sizing: border-box; /* Include padding in width calculation */
    }

    /* Product Information Card */
    .product-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 10px;
        width: 100%; /* Card takes full width of product container */
        box-sizing: border-box;
    }

    .product-image {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .product-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-description {
        margin-bottom: 5px;
    }

    .product-price {
        color: green;
        font-weight: bold;
    }

    .total-price {
        margin-top: 20px;
        font-weight: bold;
    }

    .summary {
        margin-top: 20px;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-card {
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        height: 100%;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .product-card.selected {
        border: 2px solid green;
    }
    .selection-container {
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
    }

    .product-select {
        margin-right: 5px;
    }

</style>
@endsection

@section('content')
    <article id="main">
        <header>
            <h2>Tarieven</h2>
            <p>Want wij moeten ook ons broodje beenham kunnen halen...</p>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <h1>Services Configurator</h1>
                <div id="configurator-container"></div>
            </div>
        </section>
    </article>
@endsection

@section("custom_js")
    @vite(['resources/js/configurator.ts'])
@endsection
