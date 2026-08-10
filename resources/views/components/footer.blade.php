@php
    $settings = \App\Models\WebsiteSetting::getAll();
    $companyName = $settings['company_name'] ?? 'A.one national technology Pvt Ltd.';
    $copyrightText = $settings['copyright_text'] ?? '© ' . date('Y') . ' ' . $companyName . '. All Rights Reserved.';
@endphp
<footer id="footer" class="footer">
    <div class="container copyright text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $companyName }}</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
