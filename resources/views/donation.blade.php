<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Donate</title>
        <link rel="stylesheet" href="{{ asset('css/donation.css') }}"/>
    </head>
    <body>
        <main class="viewport">
            <section class="donate__container">
                <div class="donate__item">
                    <div class="donate__first-row">
                        <div class="donate__first-row-img">
                            <img src="../images/UNIPH2019018.JPG.webp" alt="" />
                        </div>

                        <div class="donate__text-description">
                            <h1>Thank you for helping us end hunger.</h1>
                            <p>
                                Your contribution can end the cycle of poverty
                                and hunger for families in need. Every dollar
                                counts and can make a significant difference in
                                the lives of those who need it most. Togetphpher,
                                we can create a brighter future for those who
                                are living in extreme poverty.
                            </p>
                        </div>
                    </div>

                    <div class="donate__second-row">
                        <form id="donation__form" action="{{ route('donation.store') }}" method="POST">
                        @csrf
                            <div class="fullname-container">
                                <label>Full Name</label>
                                <input
                                    type="text"
                                    id="fname"
                                    name="fname"
                                    placeholder="Type your full name"
                                />
                            </div>
                            <div class="phone__number-container">
                                <label>Phone Number</label>
                                <input
                                    type="number"
                                    id="phone_number"
                                    name="phone_number"
                                    placeholder="+000 000 000"
                                    required
                                />
                            </div>
                            <div class="email-container">
                                <label>Email</label>
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Email"
                                    required
                                />
                            </div>

                            <div class="donation-container">
                                <label for="donation-amount"
                                    >Donation Amount</label
                                >
                                <input
                                    type="number"
                                    id="donation_amount"
                                    name="donation_amount"
                                    placeholder="Enter Any Amount"
                                    required
                                />
                            </div>

                            <div class="date-container">
                                <label for="date">Enter a date</label>
                                <input
                                    type="text"
                                    id="date"
                                    name="date"
                                    placeholder="mm/dd/yy"
                                    pattern="\d{2}/\d{2}/\d{2}"
                                    required
                                />
                            </div>

                            <div class="message-container">
                                <label for="message" class="message-label"
                                    >Message:</label
                                >
                                <textarea
                                    id="message"
                                    name="message"
                                    class="message"
                                    placeholder="Write your message here"
                                ></textarea>
                            </div>

                            <div class="button-container">
                                <button class="donate__btn">Donate</button>
                            </div>
 
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>

                   
            </section>
        </main>
    </body>
</html>
