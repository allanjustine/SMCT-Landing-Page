document.addEventListener("livewire:navigated", () => {
    const darkPreference = localStorage.getItem("flux.appearance");

    if (darkPreference === "dark" || !darkPreference) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }
});

document.addEventListener("livewire:navigated", () => {
    const handleScroll = () => {
        const navbar = document.getElementById("navbar");

        if (window.scrollY > 150) {
            navbar.classList.remove("bg-light/90");
            navbar.classList.add("bg-gray-200", "dark:bg-gray-800");
        } else {
            navbar.classList.add("bg-light/90");
            navbar.classList.remove("bg-gray-200", "dark:bg-gray-800");
        }
    };

    document.addEventListener("scroll", handleScroll);
});

document.addEventListener("livewire:navigated", () => {
    AOS.init();
});
