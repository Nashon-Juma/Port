@component('mail::message')
    # **Mambo Nashon!**

    Ukona Messo From Ur Portfolio:

    @component('mail::panel')
        ### **Message Details:**

        - **Name:** {{ $data['name'] }}
        - **Email:** @if (isset($data['email']) && $data['email'])
            [{{ $data['email'] }}](mailto:{{ $data['email'] }})
        @else
            N/A
        @endif
        - **Phone:** {{ $data['phone'] ?? 'N/A' }}
        - **Subject:** {{ $data['subject'] }}
        - **Message:**

        **"{{ $data['message'] }}"**
    @endcomponent

    @component('mail::button', ['url' => 'mailto:' . $data['email']])
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
