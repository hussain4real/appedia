@component('mail::message')
# Congratulations

Your shop is now active. Happy selling!.

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit Your Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent