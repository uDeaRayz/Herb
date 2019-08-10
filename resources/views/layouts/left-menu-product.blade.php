<ul class="menu-list">
    <li>
        <a href="{{ route('product-search', ['type', 'all']) }}" class="pointer">ผลิตภัณฑ์สมุนไพร</a>
        <ul>
            <li>
                <a href="{{ route('product-search', ['type', '1']) }}" class="pointer">ยาชุด</a>
            </li>
            <li>
                <a href="{{ route('product-search', ['type', '3']) }}" class="pointer">ยาสำหรับใช้ภายใน</a>
            </li>
            <li>
                <a href="{{ route('product-search', ['type', '2']) }}" class="pointer">ยาสำหรับใช้ภายนอก</a>
            </li>
        </ul>
    </li>
</ul>
