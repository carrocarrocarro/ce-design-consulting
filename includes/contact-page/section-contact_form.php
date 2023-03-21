<section class="page-section contact-form-section fade-in">
    <div class="content contact-content center-content">
        <form class="contact-form">
            <h2>Get in touch</h2>
            <div class="form-row">
                <label for="subject">
                    How can I help you?
                </label>
                <select id="subject">
                    <option value="website-services">
                        I’m interested in a website.
                    </option>
                    <option value="brand-services">
                        I’m interested in brand services.
                    </option>
                    <option value="content-services">
                        I’m interested in content services.
                    </option>
                    <option value="free-consulation">
                        I would like to book a free consultation.
                    </option>
                    <option value="say-hi">
                        I want to say hello.
                    </option>
                    <option value="free-consulation">
                        Other inquiries.
                    </option>
                </select>
            </div>
            <div class="form-row contact-detail-options" id="website-service-options">
                <p>I’m interested in the following website package</p>
                <input 
                    type="checkbox" 
                    name="website-small" 
                    id="website-small"
                >
                <label for="website-small">
                    The small package
                </label>
                <input 
                    type="checkbox" 
                    name="website-smart" 
                    id="website-smart"
                >
                <label for="website-smart">
                    The smart package
                </label>
                <input 
                    type="checkbox" 
                    name="website-luxury" 
                    id="website-luxury"
                >
                <label for="website-luxury">
                    The luxury package
                </label>
                <input 
                    type="checkbox" 
                    name="website-more-info" 
                    id="website-more-info"
                >
                <label for="website-more-info">
                    I’m not sure yet and would like more info
                </label>
            </div>
            <div class="form-row contact-detail-options" id="brand-service-options">
                <p>I’m interested in brand services.</p>
                <input 
                    type="checkbox" 
                    name="website-small" 
                    id="website-small"
                >
                <label for="website-small">
                    Brand analysis 
                </label>
                <input 
                    type="checkbox" 
                    name="website-smart" 
                    id="website-smart"
                >
                <label for="website-smart">
                    Business analysis
                </label>
                <input 
                    type="checkbox" 
                    name="website-luxury" 
                    id="website-luxury"
                >
                <label for="website-luxury">
                    Graphic profile
                </label>
                <input 
                    type="checkbox" 
                    name="website-luxury" 
                    id="website-luxury"
                >
                <label for="website-luxury">
                    Logotype
                </label>
                <input 
                    type="checkbox" 
                    name="website-more-info" 
                    id="website-more-info"
                >
                <label for="website-more-info">
                    Other inquires
                </label>
            </div>
            <div class="form-row contact-detail-options" id="content-service-options">
                <p>I’m interested in content services.</p>
                <input 
                    type="checkbox" 
                    name="website-small" 
                    id="website-small"
                >
                <label for="website-small">
                    Copy and content writing
                </label>
                <input 
                    type="checkbox" 
                    name="website-smart" 
                    id="website-smart"
                >
                <label for="website-smart">
                    Illustration and graphic design for web
                </label>
                <input 
                    type="checkbox" 
                    name="website-luxury" 
                    id="website-luxury"
                >
                <label for="website-luxury">
                    Photos for web
                </label>
                <input 
                    type="checkbox" 
                    name="website-more-info" 
                    id="website-more-info"
                >
                <label for="website-more-info">
                    Other inquires
                </label>
            </div>
            <div class="form-row contact-detail-options" id="free-consulation">
                <p>I would like to book a free consultation.</p>
            </div>
            <div class="form-row contact-detail-options" id="say-hi">
                <p>Lovely, I’m looking forward to hearing from you.</p>
            </div>
            <div class="form-row contact-detail-options" id="other-inquiries">
                <p>I’m happy to hear from you. Type your question in the message below!</p>
            </div>
            <div class="form-row">
                <label for="name">
                    Name
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    value="Your name" 
                    required
                >
            </div>
            <div class="form-row">
                <label for="email">
                    Email
                </label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="yourname@example.com" 
                    required
                >
            </div>
            <div class="form-row">
                <label for="message">
                    Message
                </label>
                <textarea 
                    id="message" 
                    name="message"
                    value="Whats on your mind?" 
                    required
                >
                </textarea>
            </div>
            <div class="form-row">
                <input 
                    type="submit" 
                    value="Send"
                    id="send"
                    class="btn"
                >
            </div>    
        </form>
    </div>
</section>