document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector("#header");
    const handleScroll = () => {
        const scrollTop = window.scrollY;
        if (scrollTop > 100) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    };

    window.addEventListener("scroll", handleScroll);

    return () => {
        window.removeEventListener("scroll", handleScroll);
    };
});