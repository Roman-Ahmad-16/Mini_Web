<h2>New Contact Form Submitted</h2>
<p><b>Name:</b> {{ $contact['name'] }}</p>
<p><b>Email:</b> {{ $contact['email'] }}</p>
<p><b>Phone:</b> {{ $contact['phone_no'] ?? 'N/A' }}</p>
<p><b>Message:</b> {{ $contact['message'] }}</p>
<p>Submitted via: Contact Page</p>
