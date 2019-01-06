<div class="contact" id="contact-me">

    <div class="email-form">

        <header class="row col-md-12 title is-1">Contact Me</header>

        <form method="POST" action="/email">
            @csrf
            <div class="form-column">
                <div class="field is-grouped">
                    <div>
                        <label for="firstName" class="label">First Name</label>
                        <input type="text" id="firstName" class="input {{ $errors->has('firstName') ? 'is-danger' : '' }}" name="firstName" value="{{ old('firstName') }}" required>
                        <div class="help">@foreach ($errors->get('firstName') as $error) {{ $error }} @endforeach</div>
                    </div>

                    <div>
                        <label for="lastName" class="label">Last Name</label>
                        <input type="text" id="lastName" class="input {{ $errors->has('lastName') ? 'is-danger' : '' }}" name="lastName" value="{{ old('lastName') }}" required>
                        <div class="help">@foreach ($errors->get('lastName') as $error) {{ $error }} @endforeach</div>
                    </div>
                </div>


                <label for="email" class="label">Email</label>
                <input type="email" id="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                <div class="help">@foreach ($errors->get('email') as $error) {{ $error }} @endforeach</div>

                <div class="field is-grouped">
                    <div>
                        <label for="phone" class="label">Phone</label>
                        <input type="tel" id="phone" class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" value="{{ old('phone') }}">
                        <div class="help">@foreach ($errors->get('phone') as $error) {{ $error }} @endforeach</div>
                    </div>

                    <div>
                        <label for="weddingDate" class="label">Wedding Date</label>
                        <input type="date" id="weddingDate" class="input {{ $errors->has('weddingDate') ? 'is-danger' : '' }}" name="weddingDate" value="{{ old('weddingDate') }}">
                        <div class="help">@foreach ($errors->get('weddingDate') as $error) {{ $error }} @endforeach</div>
                    </div>
                </div>

                <label for="location" class="label">Wedding Location</label>
                <input type="text" id="location" class="input {{ $errors->has('location') ? 'is-danger' : '' }}" name="location" value="{{ old('location') }}">
                <div class="help">@foreach ($errors->get('location') as $error) {{ $error }} @endforeach</div>


            </div>

            <div class="form-column contact-msg">
                <label for="message" class="label">Message</label>
                <textarea id="message" class="input message {{ $errors->has('message') ? 'is-danger' : '' }}" name="message">{{ old('message') }}</textarea>
                <div class="help">@foreach ($errors->get('message') as $error) {{ $error }} @endforeach</div>

                <button type="submit" class="submit button">Submit</button>
            </div>

        </form>
    </div>

</div>