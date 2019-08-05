<ul class="menu-list">
        <li>
            <a href="{{ route('spa-search', ['district', 'all']) }}" class="pointer">เลือกอำเภอทีต้องการใช้บริการ</a>
            <ul>
                <li>
                    <a href="{{ route('spa-search', ['district', 'เมืองนครศรีธรรมราช']) }}" class="pointer">เมืองนครศรีธรรมราช</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['district', 'ทุ่งสง']) }}" class="pointer">ทุ่งสง</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['district', 'ลานสกา']) }}" class="pointer">ลานสกา</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['district', 'ท่าศาลา']) }}" class="pointer">ท่าศาลา</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['district', 'พรหมคีรี']) }}" class="pointer">พรหมคีรี</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('spa-search', ['store', 'all']) }}" class="pointer">ร้านสปา</a>
            <ul>
                <li>
                    <a href="{{ route('spa-search', ['store', 'สะบันงา']) }}" class="pointer">ร้านสะบันงา</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['store', 'สวคนธ์สปา']) }}" class="pointer">ร้านสวคนธ์สปา</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['store', 'ภัทรลดา']) }}" class="pointer">ร้านภัทรลดา</a>
                </li>
                <li>
                    <a href="{{ route('spa-search', ['store', 'มะลิ']) }}" class="pointer">ร้านมะลิ</a>
                </li>
            </ul>
        </li>
    </ul>
