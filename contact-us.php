<?php include("includes/header.php"); ?>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-blue-900 mb-4">Contact Us</h1>
                <div class="w-20 h-1 bg-yellow-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Get in touch with us for any queries or information.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-semibold text-blue-900 mb-6">School Information</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900">Address</h3>
                                <p class="text-gray-600">New D.P.S. School<br>Deeghot, Palwal<br>Haryana</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900">Phone</h3>
                                <p class="text-gray-600">+91 9813937336 <br>+91 8053886194</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900">Email</h3>
                                <p class="text-gray-600">ndpsdeeghotpalwal@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-blue-900"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900">Office Hours</h3>
                                <p class="text-gray-600">Monday - Saturday: 8:00 AM - 4:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-blue-900 mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-blue-900 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-blue-900 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-blue-900 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-blue-900 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-blue-900 mb-6">Send us a Message</h2>
                    <form>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="name">Full Name *</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="email">Email Address *</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="subject">Subject *</label>
                            <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                                <option value="">Select a subject</option>
                                <option value="admission">Admission Inquiry</option>
                                <option value="general">General Inquiry</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="message">Message *</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-md hover:bg-blue-800 transition duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="mt-16">
                <h2 class="text-2xl font-semibold text-blue-900 mb-6 text-center">Location Map<br><br></h2>
                <div class="bg-gray-200 h-96 rounded-lg">
                    <!-- Replace with actual map embed code -->
                    <div class="w-full h-full flex items-center justify-center text-gray-500">
                  
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.3071928109575!2d77.3732697!3d28.045643499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39732d32484906e7%3A0x8176f5bc38729841!2sNew%20dps%20school%20deeghot%20palwal!5e0!3m2!1sen!2sin!4v1754829559880!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include ('includes/footer.php'); ?>