@php
    $currentUrl = "https://www.ngenitltd.com/admin/single-rfq/" . $rfq_details->rfq_code . "/quotation";
    $whatsappLink = 'https://wa.me/?text=' . urlencode('Check out this quotation: ' . $currentUrl);
@endphp

<!-- Create a button or link to share via WhatsApp -->
<a href="{{ $whatsappLink }}" target="_blank" class="btn navigation_btn rfqs-btns">
    <i class="fa-regular fa-circle-check pe-2"></i>Share on WhatsApp
</a>
