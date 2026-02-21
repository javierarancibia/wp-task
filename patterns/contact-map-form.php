<?php
/**
 * Title: Contact Map & Form
 * Slug: bespokerx/contact-map-form
 * Categories: text, form
 */
?>

<section class="wp-block-group contact-map-section">

    <div class="cm-pattern-strip" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pattern-strip-light.png');"></div>

    <div class="cm-form-wrapper">
        <form class="cm-floating-form">
            
            <div class="cm-input-group">
                <input type="text" placeholder="FIRST NAME (required)" required class="cm-input-user">
            </div>
            
            <div class="cm-input-group">
                <input type="text" placeholder="LAST NAME (required)" required class="cm-input-user">
            </div>
            
            <div class="cm-input-group">
                <input type="email" placeholder="EMAIL: yourname@email.com (required)" required class="cm-input-email">
            </div>
            
            <div class="cm-input-group">
                <input type="tel" placeholder="PHONE: 1-222-333-4444" class="cm-input-phone">
            </div>
            
            <div class="cm-input-group">
                <select class="cm-input-select">
                    <option value="" disabled selected>Inquiry...</option>
                    <option value="general">General Inquiry</option>
                    <option value="appointment">Appointment Request</option>
                </select>
            </div>
            
            <div class="cm-input-group">
                <textarea placeholder="MESSAGE: Hi! I have a question about one of your services." class="cm-input-pencil"></textarea>
            </div>

            <div class="cm-disclaimer-group">
                <label class="cm-checkbox-container">
                    <input type="checkbox" required>
                    <span class="cm-checkmark"></span>
                    <span class="cm-disclaimer-text">
                        By providing a telephone number and submitting the form you are consenting to be contacted by SMS text message from Bespoke Rx. Message frequency may vary. Message & data rates may apply. Reply STOP to opt out of further messaging. Reply HELP for more information. See our Privacy Policy here.
                    </span>
                </label>
            </div>

            <button type="submit" class="cm-btn-submit">SUBMIT</button>

        </form>
    </div>

    <div class="cm-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3523.868779836338!2d-82.46461948493261!3d27.9472350826928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2c4f51950e417%3A0x88989dbad1cba9f!2s442%20W%20Kennedy%20Blvd%20Suite%20310%2C%20Tampa%2C%20FL%2033606!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>