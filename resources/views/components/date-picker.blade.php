<div class="border border-[#DBDBDB] shadow-sm p-3 rounded-md">
    <h6 class="font-semibold text-[14px] mb-2">Nama</h6>
    <input type="text" id="nama" name="nama" class="border-t-0 border-x-0 border-[#DBDBDB] focus:ring-0 focus:border-[#008ED6] placeholder:text-gray-500 w-full p-[4px] text-[13px]" placeholder="Masukkan nama">
    <h6 class="font-semibold text-[14px] mt-5 mb-2">Tanggal</h6>
    <div class="relative">
        <div class="flex flex-wrap gap-3">
            <!-- Calendar Icon Button -->
            <div id="calendar-icon" class="text-center border border-[#DBDBDB] rounded py-2 px-3 cursor-pointer">
                <i class="bi bi-calendar-event text-gray-500 text-[24px] font-bold"></i>
            </div>
            
            <!-- Today Button -->
            <div class="date-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" 
                data-date="{{ date('d-m-Y', strtotime('+2 day')) }}">
                <p class="text-gray-500 text-[13px]">Besok <br/> {{ date('d-m-Y', strtotime('+2 day')) }}</p>
            </div>
            
            <!-- Tomorrow Button -->
            <div class="date-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" 
                data-date="{{ date('d-m-Y', strtotime('+1 day')) }}">
                <p class="text-gray-500 text-[13px]">Lusa <br/> {{ date('d-m-Y', strtotime('+1 day')) }}</p>
            </div>
            
            <!-- Custom Date Container (akan muncul ketika user memilih tanggal kustom) -->
            <div id="custom-date-container" class="date-option text-center border border-[#DBDBDB] rounded py-2 px-5 hidden cursor-pointer">
                <p class="text-gray-500 text-[13px]"><span id="selected-day-name"></span> <br/> <span id="selected-date"></span></p>
            </div>
        </div>
        
        <!-- Calendar Modal -->
        <div id="calendar-modal" class="hidden absolute mt-2 p-4 bg-white border border-[#DBDBDB] rounded shadow-lg z-10" style="min-width: 300px;">
            <div class="mb-4">
                <div class="flex justify-between items-center">
                    <button id="prev-month" class="text-gray-500"><i class="bi bi-chevron-left"></i></button>
                    <h3 id="current-month-year" class="text-center font-semibold"></h3>
                    <button id="next-month" class="text-gray-500"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            
            <div class="grid grid-cols-7 gap-1 mb-2">
                <div class="text-center text-xs font-bold">Mg</div>
                <div class="text-center text-xs font-bold">Sn</div>
                <div class="text-center text-xs font-bold">Sl</div>
                <div class="text-center text-xs font-bold">Rb</div>
                <div class="text-center text-xs font-bold">Km</div>
                <div class="text-center text-xs font-bold">Jm</div>
                <div class="text-center text-xs font-bold">Sb</div>
            </div>
            
            <div id="calendar-days" class="grid grid-cols-7 gap-1">
                <!-- Calendar days will be generated here -->
            </div>
            
            <div class="mt-4 flex justify-between">
                <button id="close-calendar" class="px-3 py-1 text-xs bg-gray-100 hover:bg-gray-200 rounded">Tutup</button>
            </div>
        </div>
    </div>
    
    <input type="hidden" id="selected-date-input" value="">
    
    <h6 class="font-semibold text-[14px] mt-5 mb-2">Pagi</h6>
    <div class="flex flex-wrap gap-3">
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="09:00" data-period="Pagi">
            <p class="text-gray-500 text-[13px]">09:00</p>
        </div>
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="10:00" data-period="Pagi">
            <p class="text-gray-500 text-[13px]">10:00</p>
        </div>
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="11:00" data-period="Pagi">
            <p class="text-gray-500 text-[13px]">11:00</p>
        </div>
    </div>
    
    <h6 class="font-semibold text-[14px] mt-5 mb-2">Siang</h6>
    <div class="flex flex-wrap gap-3">
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="12:00" data-period="Siang">
            <p class="text-gray-500 text-[13px]">12:00</p>
        </div>
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="13:00" data-period="Siang">
            <p class="text-gray-500 text-[13px]">13:00</p>
        </div>
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="14:00" data-period="Siang">
            <p class="text-gray-500 text-[13px]">14:00</p>
        </div>
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="15:00" data-period="Siang">
            <p class="text-gray-500 text-[13px]">15:00</p>
        </div>
    </div>
    
    <h6 class="font-semibold text-[14px] mt-5 mb-2">Malam</h6>
    <div class="flex flex-wrap gap-3">
        <div class="time-option text-center border border-[#DBDBDB] rounded py-2 px-5 cursor-pointer" data-time="19:00" data-period="Malam">
            <p class="text-gray-500 text-[13px]">19:00</p>
        </div>
    </div>
    
    <input type="hidden" id="selected-time-input" value="">
    <input type="hidden" id="selected-period-input" value="">
    
    <h6 class="font-semibold text-[14px] mt-5 mb-2">Catatan</h6>
    <input type="text" id="catatan" name="catatan" class="border-t-0 border-x-0 border-[#DBDBDB] focus:ring-0 focus:border-[#008ED6] placeholder:text-gray-500 w-full p-[4px] text-[13px]" placeholder="Tambahkan catatan jika ada...">
    
    <button id="send-wa-btn" class="w-full bg-[#008ED6] text-white text-[14px] font-semibold text-center py-2 rounded mt-5">Buat Janji</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarIcon = document.getElementById('calendar-icon');
    const calendarModal = document.getElementById('calendar-modal');
    const closeCalendar = document.getElementById('close-calendar');
    const prevMonth = document.getElementById('prev-month');
    const nextMonth = document.getElementById('next-month');
    const currentMonthYear = document.getElementById('current-month-year');
    const calendarDays = document.getElementById('calendar-days');
    const customDateContainer = document.getElementById('custom-date-container');
    const selectedDateSpan = document.getElementById('selected-date');
    const selectedDayName = document.getElementById('selected-day-name');
    const selectedDateInput = document.getElementById('selected-date-input');
    const selectedTimeInput = document.getElementById('selected-time-input');
    const selectedPeriodInput = document.getElementById('selected-period-input');
    const sendWaBtn = document.getElementById('send-wa-btn');
    
    let currentDate = new Date();
    let selectedDate = null;
    
    // Default: Pilih "Hari ini"
    const today = new Date();
    selectedDateInput.value = formatDate(today);
    
    // Format tanggal sebagai DD-MM-YYYY
    function formatDate(date) {
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        return `${day}-${month}-${year}`;
    }
    
    // Mendapatkan nama hari dalam bahasa Indonesia
    function getDayName(date) {
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        return days[date.getDay()];
    }
    
    // Render kalender untuk bulan dan tahun tertentu
    function renderCalendar(month, year) {
        calendarDays.innerHTML = '';
        
        currentMonthYear.textContent = new Date(year, month).toLocaleDateString('id-ID', { month: 'long', year: 'numeric' });
        
        // Hari pertama dari bulan (0 = Minggu, 1 = Senin, dst.)
        const firstDay = new Date(year, month, 1).getDay();
        
        // Jumlah hari dalam bulan
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        // Membuat sel kosong untuk hari-hari sebelum hari pertama bulan
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.className = 'w-8 h-8';
            calendarDays.appendChild(emptyCell);
        }
        
        // Membuat sel untuk setiap hari dalam bulan
        for (let i = 1; i <= daysInMonth; i++) {
            const dayCell = document.createElement('div');
            const dateObj = new Date(year, month, i);
            
            dayCell.className = 'w-8 h-8 rounded-full flex items-center justify-center text-sm cursor-pointer hover:bg-gray-200';
            dayCell.textContent = i;
            
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Reset jam hari ini
            const minSelectableDate = new Date(today);
            minSelectableDate.setDate(today.getDate() + 1); // H+1
            
            if (dateObj < minSelectableDate) {
                dayCell.classList.add('text-gray-300', 'cursor-not-allowed');
            } else {
                dayCell.addEventListener('click', function() {
                    selectCustomDate(dateObj);
                });
            }
            
            // Highlight hari ini
            if (
                i === new Date().getDate() && 
                month === new Date().getMonth() && 
                year === new Date().getFullYear()
            ) {
                dayCell.classList.add('bg-blue-100');
            }
            
            // Highlight tanggal yang dipilih
            if (
                selectedDate && 
                i === selectedDate.getDate() && 
                month === selectedDate.getMonth() && 
                year === selectedDate.getFullYear()
            ) {
                dayCell.classList.add('bg-[#008ED6]', 'text-white');
            }
            
            calendarDays.appendChild(dayCell);
        }
    }
    
    // Memilih tanggal kustom
    function selectCustomDate(date) {
        selectedDate = date;
        selectedDateInput.value = formatDate(date);
        selectedDateSpan.textContent = formatDate(date);
        selectedDayName.textContent = getDayName(date);
        
        // Hilangkan highlight dari semua opsi tanggal
        document.querySelectorAll('.date-option').forEach(el => {
            el.classList.remove('border-[#008ED6]', 'bg-blue-50');
        });
        
        // Tampilkan container tanggal kustom
        customDateContainer.classList.remove('hidden');
        customDateContainer.classList.add('border-[#008ED6]', 'bg-blue-50');
        
        calendarModal.classList.add('hidden');
        
        // Render ulang kalender untuk menampilkan tanggal yang dipilih
        renderCalendar(date.getMonth(), date.getFullYear());
    }
    
    // Toggle kalender saat ikon diklik
    calendarIcon.addEventListener('click', function() {
        if (calendarModal.classList.contains('hidden')) {
            calendarModal.classList.remove('hidden');
            renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
        } else {
            calendarModal.classList.add('hidden');
        }
    });
    
    // Tutup kalender
    closeCalendar.addEventListener('click', function() {
        calendarModal.classList.add('hidden');
    });
    
    // Bulan sebelumnya
    prevMonth.addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
    });
    
    // Bulan berikutnya
    nextMonth.addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
    });
    
    // Setup tombol opsi tanggal (Hari ini/Besok)
    const dateOptions = document.querySelectorAll('.date-option');
    dateOptions.forEach(option => {
        option.addEventListener('click', function() {
            const dateStr = this.getAttribute('data-date');
            if (!dateStr) return; // Skip for custom date container
            
            // Setel tanggal yang dipilih
            selectedDateInput.value = dateStr;
            
            // Hilangkan highlight dari semua opsi
            document.querySelectorAll('.date-option').forEach(el => {
                el.classList.remove('border-[#008ED6]', 'bg-blue-50');
            });
            
            // Highlight opsi yang dipilih
            this.classList.add('border-[#008ED6]', 'bg-blue-50');
            
            // Sembunyikan container tanggal kustom jika yang dipilih adalah Hari ini/Besok
            if (this.id !== 'custom-date-container') {
                customDateContainer.classList.add('hidden');
            }
        });
    });
    
    // Setup tombol opsi waktu
    const timeOptions = document.querySelectorAll('.time-option');
    timeOptions.forEach(option => {
        option.addEventListener('click', function() {
            const time = this.getAttribute('data-time');
            const period = this.getAttribute('data-period');
            
            // Setel waktu yang dipilih
            selectedTimeInput.value = time;
            selectedPeriodInput.value = period;
            
            // Hilangkan highlight dari semua opsi
            document.querySelectorAll('.time-option').forEach(el => {
                el.classList.remove('border-[#008ED6]', 'bg-blue-50');
            });
            
            // Highlight opsi yang dipilih
            this.classList.add('border-[#008ED6]', 'bg-blue-50');
        });
    });
    
    // Click outside to close calendar
    document.addEventListener('click', function(event) {
        if (!calendarModal.contains(event.target) && event.target !== calendarIcon && !calendarIcon.contains(event.target)) {
            calendarModal.classList.add('hidden');
        }
    });
    
    // Kirim WhatsApp ketika tombol "Buat Janji" diklik
    sendWaBtn.addEventListener('click', function() {
        const nama = document.getElementById('nama').value;
        const selectedDate = selectedDateInput.value;
        const selectedTime = selectedTimeInput.value;
        const selectedPeriod = selectedPeriodInput.value;
        const catatan = document.getElementById('catatan').value;
        
        // Validasi
        if (!nama) {
            alert('Mohon masukkan nama terlebih dahulu');
            return;
        }

        if (!selectedDate) {
            alert('Mohon pilih tanggal terlebih dahulu');
            return;
        }
        
        if (!selectedTime) {
            alert('Mohon pilih waktu terlebih dahulu');
            return;
        }
        
        // Format pesan WhatsApp
        let message = `Saya ${nama} ingin membuat janji pada tanggal ${selectedDate} ${selectedPeriod} pukul ${selectedTime}`;
        
        if (catatan) {
            message += `\nCatatan: ${catatan}`;
        }
        
        // Format URL WhatsApp
        const encodedMessage = encodeURIComponent(message);
        const waURL = `https://wa.me/+628980856244?text=${encodedMessage}`;
        
        // Buka WhatsApp
        window.open(waURL, '_blank');
    });
    
    // Default: Otomatis pilih "Hari ini"
    const todayOption = document.querySelector('.date-option[data-date="' + formatDate(today) + '"]');
    if (todayOption) {
        todayOption.click();
    }
});
</script>