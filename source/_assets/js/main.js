if (localStorage.theme === undefined) {
    localStorage.theme = 'light'
}

function checkTheme() {
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')


        document.querySelector('.github-logo-dark').style.display = 'none'
        document.querySelector('.github-logo-light').style.display = 'initial'

    } else {
        document.documentElement.classList.remove('dark')

        document.querySelector('.github-logo-dark').style.display = 'initial'
        document.querySelector('.github-logo-light').style.display = 'none'
    }
}

document.querySelector('#btnDarkMode').addEventListener('click', () => {
    if (localStorage.theme === 'light') {
        localStorage.theme = 'dark'
    } else {
        localStorage.theme = 'light'
    }

    checkTheme()
});

checkTheme();