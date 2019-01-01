<div class="contact" id="contact-me">

    <div class="email-form">

        <header class="row col-md-12">Contact Me</header>

        <form method="POST" action="/email">
            @csrf
            <div class="form-column">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" class="{{ $errors->has('title') ? 'is-danger' : '' }}" name="firstName">

                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" class="{{ $errors->has('title') ? 'is-danger' : '' }}" name="lastName">

                <label for="email">Email</label>
                <input type="text" id="email" class="{{ $errors->has('title') ? 'is-danger' : '' }}" name="email">

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">

                <label for="weddingDate">Wedding Date</label>
                <input type="text" id="weddingDate" name="weddingDate">

                <label for="location">Wedding Location</label>
                <input type="text" id="location" name="location">
            </div>

            <div class="form-column contact-msg">
                <label for="message">Message</label>
                <textarea id="message" class="message" name="message"></textarea>

                <button type="submit" class="submit">Submit</button>
            </div>

            @if($errors->any())
                <div class="notification is-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>

</div>