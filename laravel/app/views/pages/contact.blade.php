@extends('layouts.default')

@section('content')
    <div class="about-theme">
      <h2>Contact...</h2>
      <div class="about-pane">
        <p>Please use the contact form below for customer inquiries, questions, or to join our email list:</p>

        <form class="form-news" action="/my-handling-form-page" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" />
            </div>
            <div>
                <label for="mail">E-mail:</label>
                <input type="email" id="mail" />
            </div>
            <div>
                <label for="msg">Message:</label>
                <textarea id="msg"></textarea>
            </div>

            <div>
                <p>Would you like to join the Rastro Flamenco email list?</p>
                <input type="radio" name="yes" value="Yes" checked> Yes
                <input type="radio" name="no" value="No Thank You"> No
            </div>

            <div class="button">
                <button type="submit">Send your message</button>
            </div>
        </form>

      </div>
    </div>
@stop