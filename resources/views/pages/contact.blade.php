<div class="contact container-fluid">

    <div class="contact-content">

        <div class="email-form col-md-12">

            <header class="row col-md-12">Contact Me</header>

            <form method="POST" action="/email">
                @csrf
                <div class="form-column">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">

                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">

                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone">

                    <label for="weddingDate">Wedding Date</label>
                    <input type="text" id="weddingDate" name="weddingDate">

                    <label for="location">Wedding Location</label>
                    <input type="text" id="location" name="location">
                </div>

                <div class="form-column">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="message" name="message"></textarea>

                    <button type="submit" class="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
