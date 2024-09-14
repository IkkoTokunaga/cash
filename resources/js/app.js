import './bootstrap';
Livewire.on('navigated', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
