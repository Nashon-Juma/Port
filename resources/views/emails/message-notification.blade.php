@component('mail::message')
# **You've Got a New Message!**

Hi there,

You've received a new message from your website's contact form. Here are the details:

@component('mail::panel')
### **Message Details:**

- **Name:** {{ $data['name'] }}
- **Email:** [{{ $data['email'] }}](mailto:{{ $data['email'] }})
- **Phone:** {{ $data['phone'] ?? 'N/A' }}
- **Subject:** {{ $data['subject'] }}
- **Message:**

**"{{ $data['message'] }}"**
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{ $data['name'] }}
@endcomponent

Thanks for staying connected!

**Best Regards,**
{{ config('app.name') }}

@slot('footer')
@component('mail::footer')
&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
@endcomponent
@endslot
@endcomponent
