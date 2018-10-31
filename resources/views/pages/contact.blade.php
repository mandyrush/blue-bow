@extends('layouts.master')

@section('title', 'Contact Me')

@section('content')

    <div class="contact-content">
        <header class="row">Contact Me</header>

        <div class="email-form">

            <form action="">
                <div class="form-column">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName">

                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName">

                    <label for="email">Email</label>
                    <input type="text" id="email">

                    <label for="phone">Phone</label>
                    <input type="text" id="phone">

                    <label for="weddingDate">Wedding Date</label>
                    <input type="text" id="weddingDate">

                    <label for="location">Wedding Location</label>
                    <input type="text" id="location">
                </div>

                <div class="form-column">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="message"></textarea>

                    <button type="submit" class="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>

@endsection
