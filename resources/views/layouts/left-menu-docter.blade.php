<ul class="menu-list">
        <li>
            <a href="{{ route('docter-search', ['province', 'all']) }}" class="pointer">เลือกจังหวัดที่ตั้งการรักษาในภาคใต้</a>
            <ul>
                <li>
                    <a href="{{ route('docter-search' , ['province', 'สุราษฎร์ธานี']) }}" class="pointer">สุราษฎร์ธานี</a>
                </li>
                <li>
                    <a href="{{ route('docter-search' , ['province', 'สงขลา']) }}" class="pointer">สงขลา</a>
                </li>
                <li>
                    <a href="{{ route('docter-search' , ['province', 'ตรัง']) }}" class="pointer">ตรัง</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('docter-search', ['disease', 'all']) }}" class="pointer">โรคที่ให้การรักษา</a>
            <ul>
                <li>
                    <a href="{{ route('docter-search', ['disease', 'แก้พิษงู']) }}" class="pointer">แก้พิษงู</a>
                </li>
                <li>
                    <a href="{{ route('docter-search', ['disease', 'โรคอัมพฤกษ์']) }}" class="pointer">โรคอัมพฤกษ์</a>
                </li>
                <li>
                    <a href="{{ route('docter-search', ['disease', 'โรคมะเร็ง']) }}" class="pointer">โรคมะเร็ง</a>
                </li>
            </ul>
        </li>
    </ul>
