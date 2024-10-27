document.addEventListener('DOMContentLoaded', () => {
    const modeToggle = document.getElementById('modeToggle');

    // Pastikan elemen tombol ditemukan
    if (modeToggle) {
        function applyMode(mode) {
            if (mode === 'dark') {
                document.body.classList.add('dark-mode');
                modeToggle.textContent = 'Mode Siang';
            } else {
                document.body.classList.remove('dark-mode');
                modeToggle.textContent = 'Mode Malam';
            }
        }

        const savedMode = localStorage.getItem('mode') || 'light';
        applyMode(savedMode);

        modeToggle.addEventListener('click', () => {
            const currentMode = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            const newMode = currentMode === 'dark' ? 'light' : 'dark';
            applyMode(newMode);
            localStorage.setItem('mode', newMode);
        });
    } else {
        console.error("Tombol mode tidak ditemukan!");
    }
});
