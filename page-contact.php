<?php
/*
Template Name: Contact
*/
get_header(); ?>
<section class="section" id="contact">
  <div class="container">
    <div class="section-title">
      <h3>Contact & Bookings</h3>
      <span>Reach our team on WhatsApp, email, or send a booking request.</span>
    </div>
    <div class="contact-grid">
      <div class="contact-card">
        <h5>WhatsApp Concierge</h5>
        <p>Chat with us for instant travel planning and availability.</p>
        <a class="button" href="https://wa.me/94770000000" target="_blank" rel="noopener">Start WhatsApp Chat</a>
      </div>
      <div class="contact-card">
        <h5>Email Us</h5>
        <p>Send your travel dates and preferences for a custom quote.</p>
        <a class="button" href="mailto:hello@slluxurytours.com">hello@slluxurytours.com</a>
      </div>
      <div class="contact-card">
        <h5>Visit Our Office</h5>
        <p>No. 25, Lotus Road, Colombo 01, Sri Lanka.</p>
        <a class="button" href="tel:+94770000000">Call +94 77 000 0000</a>
      </div>
    </div>
    <div class="contact-form">
      <h4>Send a Booking Request</h4>
      <form>
        <div class="form-grid">
          <div>
            <label for="name">Full Name</label>
            <input id="name" type="text" placeholder="Your name" />
          </div>
          <div>
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="you@example.com" />
          </div>
        </div>
        <div class="form-grid">
          <div>
            <label for="dates">Travel Dates</label>
            <input id="dates" type="text" placeholder="15 Jul - 20 Jul" />
          </div>
          <div>
            <label for="package">Preferred Package</label>
            <select id="package">
              <option>Executive City Tours</option>
              <option>Tea Country Retreats</option>
              <option>Coastal Luxury Escapes</option>
            </select>
          </div>
        </div>
        <label for="message">Message</label>
        <textarea id="message" rows="4" placeholder="Tell us about your travel plans..."></textarea>
        <button class="button" type="submit">Send Request</button>
      </form>
    </div>
  </div>
</section>
<?php get_footer(); ?>
