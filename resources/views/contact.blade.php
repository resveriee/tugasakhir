@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Contact</h1>
        <p>Learn more about our company and mission.</p>

        <!-- Success Message -->
        <div id="success-message" style="display:none;" class="alert alert-success">
            Thank you for your message! We will get back to you shortly.
        </div>

        <!-- Contact Form -->
        <form id="contact-form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('success-message').style.display = 'block';
            document.getElementById('contact-form').reset();
        });
    </script>
@endsection


