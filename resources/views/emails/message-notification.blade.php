Mambo Nashon "CONTACT-FORM :: PORTFOLIO"
@component('mail::message')
**{{ $data['message'] }}**


@component('mail::table')
| **Detail**       | **Value**                                      |
|------------------|------------------------------------------------|
| **Name**         | {{ $data['name'] ?? 'N/A' }}                   |
| **Subject**      | {{ $data['subject'] ?? 'N/A' }}                |
| **Email**        | {{ $data['email'] ?? 'N/A' }}                  |
| **Phone**        | {{ $data['phone'] ?? 'N/A' }}                  |
| **IP Address**   | {{ $data['ip'] ?? 'N/A' }}                     |
| **Location**     | {{ $data['city'] ?? '' }}, {{ $data['region'] ?? '' }}, {{ $data['country'] ?? 'N/A' }} |
| **Organization** | {{ $data['org'] ?? 'N/A' }}                    |
| **Timezone**     | {{ $data['timezone'] ?? 'N/A' }}               |
| **Sent At**      | {{ $data['sent_at'] ? $data['sent_at']->format('Y-m-d H:i:s') : 'N/A' }} |
| **browser**      | {{ $data['browser'] ?? 'N/A' }}                |
| **OS**           | {{ $data['os'] ?? 'N/A' }}                     |

@endcomponent
@endcomponent
